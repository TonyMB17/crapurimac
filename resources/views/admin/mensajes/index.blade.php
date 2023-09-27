@extends('home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Mansajes</h1>
    </div>

    <!-- Button trigger modal -->
    <div style="overflow-x: scroll">
    <table class="table">
        <caption>Lista de mensajes</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Asunto</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes->reverse() as $mensaje)
            <tr>
                <th scope="row">{{ $mensaje->id }}</th>
                <td>{{ $mensaje->nombre }}</td>
                <td>{{ $mensaje->email }}</td>
                <td>{{ $mensaje->asunto }}</td>
                <td>{{ $mensaje->mensaje }}</td>
                <th>{{ $mensaje->created_at->format('d/m/Y G:i a')}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<!-- /.container-fluid -->
@endsection