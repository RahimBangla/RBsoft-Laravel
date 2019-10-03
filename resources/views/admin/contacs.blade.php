@extends('layouts.admin')

    @section('content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Contact List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">RBsoft</a></li>
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                        {{-- <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-round" title="">Add New</a> --}}
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <tbody>

                                @foreach ($contacs as $contac)
                                <tr>
                                    <td class="w60">
                                        <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 rounded" data-original-title="Avatar Name">
                                    </td>
                                    <td>
                                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg{{$contac->id}}">{{$contac->name}}</a>
                                        <p>{{$contac->created_at}}</p>

                                    </td>
                                    <td>
                                        <span>{{$contac->email}}</span>
                                    </td>
                                    <td>
                                        <span>{{$contac->subject}}</span>
                                    </td>
                                    <td>
                                            <form action="{{ url('delete' , $contac->id ) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-primary btn-sm">Delete</button>
                                                </form>
                                            </td>
                                            <td>

                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg{{$contac->id}}">Message</button>
                                        {{-- modal --}}
                                        <div class="modal fade bd-example-modal-lg{{$contac->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title h4" id="myLargeModalLabel">{{$contac->email}} ({{$contac->name}})</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>{{$contac->message}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @endsection
