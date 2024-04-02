@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Documentos</h1>
        </div>

        <!-- Button trigger modal -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Documentocreate">
                <i class="fa fa-plus fa-sm"></i>
                Agregar
            </button>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Documentos</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th width="30%">Fecha</th>
                                <th width="15%">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th width="30%">Fecha</th>
                                <th width="15%">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($documentos->reverse() as $documento)
                                <tr>
                                    <td>{{ $documento->nombre }}</td>
                                    <td>{{ $documento->created_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#edit{{ $documento->id }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#delete{{ $documento->id }}">
                                            <span class="material-symbols-outlined">
                                                delete
                                            </span>
                                        </button>
                                        <a href="{{ asset('/' . $documento->file) }}" target="_blank">
                                            <button type="button" class="btn btn-info">
                                                <span class="material-symbols-outlined">
                                                    visibility
                                                </span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @include('admin.documentos.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.documentos.create')
    </div>
    <!-- /.container-fluid -->
@endsection
