@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Documentos</h1>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
            <i class="fa fa-plus fa-sm"></i>
            Agregar
        </button>
        <br><br>

        <table class="table">
            <caption>Lista de documentos</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documentos as $documento)
                    <tr>
                        <th scope="row">{{ $documento->id }}</th>
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
                            <a href="{{ asset('/'.$documento->file)}}" target="_blank">
                                <button type="button" class="btn btn-light">
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
        @include('admin.documentos.create')
    </div>
    <!-- /.container-fluid -->
@endsection
