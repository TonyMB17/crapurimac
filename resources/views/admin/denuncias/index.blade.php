@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Denuncias</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Denuncias</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Denunciante</th>
                                <th>Denunciado</th>
                                <th>Cargo</th>
                                <th>Institucion</th>
                                <th>Fecha</th>
                                <th>Revisado</th>
                                <th>Archivo</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Denunciante</th>
                                <th>Denunciado</th>
                                <th>Cargo</th>
                                <th>Institucion</th>
                                <th>Fecha</th>
                                <th>Revisado</th>
                                <th>Archivo</th>
                                <th>Ver</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($denuncias->reverse() as $denuncia)
                                <tr>
                                    <td>{{ $denuncia->nombre }}</td>
                                    <td>{{ $denuncia->denunciado }}</td>
                                    <td>{{ $denuncia->cargo }}</td>
                                    <th>{{ $denuncia->institucion }}</th>
                                    <td>{{ $denuncia->fecha }}</td>
                                    <td>
                                        @if ($denuncia->estado == 0)
                                            <a href="#" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">REVISADO</span>
                                            </a>
                                        @else
                                            <a href="{{ route('home.denuncias.answer', $denuncia->id) }}" class="btn btn-warning btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </span>
                                                <span class="text">NUEVO</span>
                                            </a>
                                        @endif
                                    </td>
                                    <td><a href="{{ asset('/' . $denuncia->file) }}" target="_blank">
                                            <button type="button" class="btn btn-light">
                                                <span class="material-symbols-outlined">
                                                    description
                                                </span>
                                            </button>
                                        </a>
                                    </td>
                                    <td> <a href="{{ route('home.denuncias.pdf', $denuncia->id) }}" target="_blank">
                                            <button type="button" class="btn btn-light">
                                                <span class="material-symbols-outlined">
                                                    visibility
                                                </span>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
