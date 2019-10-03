<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contacsController extends Controller
{
    public function submit(Request $request) {
        $contacsEntry = new Contacs();
        $contacsEntry->contacs = $request->input('contacs');
        $contacsEntry->save();
        return redirect('/')->with('status', 'INSERTED');
    }
}
