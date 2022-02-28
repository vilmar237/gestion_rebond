@extends('frontend.layouts.backend_layout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Types de stades</h4>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                        <p class="text-success">{{session('success')}}</p>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>NOM</strong></th>
                                        <th><strong>ACTION</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($data)
                                    @foreach($data as $d)
                                        <tr>
                                            <td><strong>{{$d->id}}</strong></td>
                                            <td>{{$d->name}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                        <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{url('admin/typestade/'.$d->id).'/edit'}}">Editer</a>
                                                        <a class="dropdown-item" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ces données?')" href="{{url('admin/typestade/'.$d->id).'/delete'}}">Supprimer</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection