@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mansajes</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Mensajes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($mensajes->reverse() as $mensaje)
                                <tr>
                                    <td>{{ $mensaje->nombre }}</td>
                                    <td>{{ $mensaje->email }}</td>
                                    <td>{{ $mensaje->asunto }}</td>
                                    <td>{{ $mensaje->mensaje }}</td>
                                    <th>{{ $mensaje->created_at->format('d/m/Y G:i a') }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
    </div>
    <!-- /.container-fluid -->
@endsection
