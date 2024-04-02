@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
        </div>

        <!-- Button trigger modal -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Usercreate">
                <i class="fa fa-plus fa-sm"></i>
                Agregar nuevo USUARIO
            </button>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de USUARIOS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th width="10%">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th width="10%">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users->reverse() as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#Useredit{{ $user->id }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </button>
                                        @if($user->id!=1)
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#Userdelete{{ $user->id }}">
                                            <span class="material-symbols-outlined">
                                                delete
                                            </span>
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                            @include('admin.users.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.users.create')
    </div>
    <!-- /.container-fluid -->
@endsection
