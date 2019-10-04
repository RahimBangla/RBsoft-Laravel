<?php

namespace App\Http\Controllers;

use App\contacs;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home');
    }

// member section

    public function members()
    {
        return view('admin.members');
    }

// mils section

    public function mils()
    {
        return view('admin.mils');
    }

// bazar section


    public function bazar()
    {
        return view('admin.bazar');
    }












// contact section
    public function contacs()
    {
        $contacs = DB::table('contacs')->get();
        // dd($contacs);
        return view('admin.contacs', ['contacs' => $contacs]);

    }
    public function getContacs(Request $request)
    {
        // print_r($request->all());
        print_r($request->input('name'));
    }
    public function postContacs(Request $request)
    {
        // dd($request->all());
        $contac = new contacs();
        $contac->name = $request->input('name');
        $contac->email = $request->input('email');
        $contac->subject = $request->input('subject');
        $contac->message = $request->input('message');

        $contac->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        $contac = contacs::find($id);
        $contac->delete();

        return redirect()->back();
    }
}
