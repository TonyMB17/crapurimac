@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Noticias</h1>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Noticiacreate">
            <i class="fa fa-plus fa-sm"></i>
            Agregar
        </button>
        <br><br>
<div style="overflow-x: scroll">
        <table class="table">
            <caption>Lista de noticias</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias->reverse() as $noticia)
                    <tr>
                        <th scope="row">{{ $noticia->id }}</th>
                        <td>{{ $noticia->titulo }}</td>
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
        @include('admin.noticias.create')
    </div>
    <!-- /.container-fluid -->
@endsection
