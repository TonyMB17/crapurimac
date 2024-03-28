@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Noticias</h1>
        </div>

        <!-- Button trigger modal -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Noticiacreate">
                <i class="fa fa-plus fa-sm"></i>
                Agregar
            </button>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Noticias</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th width="20%">Imagen</th>
                                <th width="10%">Fecha</th>
                                <th width="10%">Opciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titulo</th>
                                <th width="20%">Imagen</th>
                                <th width="10%">Fecha</th>
                                <th width="10%">Opciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($noticias->reverse() as $noticia)
                                <tr>
                                    <td>{{ $noticia->titulo }}</td>
                                    <td>
                                        <img src="{{ asset($noticia->featured) }}" class="img-fluid card shadow h-100" width="200"
                                                alt="">
                                    </td>
                                    <td>{{ $noticia->created_at }}</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#Noticiaedit{{ $noticia->id }}">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#Noticiadelete{{ $noticia->id }}">
                                            <span class="material-symbols-outlined">
                                                delete
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                @include('admin.noticias.edit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.noticias.create')
    </div>
    <!-- /.container-fluid -->
@endsection
