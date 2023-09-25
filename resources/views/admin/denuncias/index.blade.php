@extends('home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Denuncias</h1>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
        <i class="fa fa-plus fa-sm"></i>
        Agregar
    </button>
    <br><br>

    <table class="table">
        <caption>Lista de denuncias</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Denunciante</th>
                <th scope="col">DNI</th>
                <th scope="col">Denunciado</th>
                <th scope="col">Institucion</th>
                <th scope="col">Cargo</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($denuncias as $denuncia)
            <tr>
                <th scope="row">{{$denuncia->id}}</th>
                <td>{{$denuncia->nombre}}</td>
                <td>{{$denuncia->dni}}</td>
                <td>{{$denuncia->denunciado}}</td>
                <td>{{$denuncia->institucion}}</td>
                <th>{{$denuncia->cargo}}</th>
                <td>{{$denuncia->fecha}}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$denuncia->id}}">
                        <span class="material-symbols-outlined">
                            visibility
                            </span>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('admin.denuncias.create')

</div>
<!-- /.container-fluid -->

@endsection