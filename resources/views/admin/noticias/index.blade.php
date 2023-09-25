@extends('home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Noticias</h1>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
        <i class="fa fa-plus fa-sm"></i>
        Agregar
    </button>
    <br><br>

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
            @foreach($noticias as $noticia)
            <tr>
                <th scope="row">{{$noticia->id}}</th>
                <td>{{$noticia->titulo}}</td>
                <td>{{$noticia->created_at}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$noticia->id}}">
                        <i class="fa fa-pencil fa-sm"></i>
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$noticia->id}}">
                        <i class="fa fa-pencil"></i>
                    </button>
                </td>
            </tr>
            @include('admin.noticias.edit')
            @endforeach
        </tbody>
    </table>
    @include('admin.noticias.create')

</div>
<!-- /.container-fluid -->

@endsection