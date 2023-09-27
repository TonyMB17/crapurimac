@extends('home')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Denuncias</h1>
    </div>

    <!-- Button trigger modal -->
    <div style="overflow-x: scroll">
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
                <th scope="col">Revisado</th>
                <th scope="col">Archivo</th>
                <th scope="col">Ver</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($denuncias->reverse() as $denuncia)
            <tr>
                <th scope="row">{{ $denuncia->id }}</th>
                <td>{{ $denuncia->nombre }}</td>
                <td>{{ $denuncia->dni }}</td>
                <td>{{ $denuncia->denunciado }}</td>
                <td>{{ $denuncia->institucion }}</td>
                <th>{{ $denuncia->cargo }}</th>
                <td>{{ $denuncia->fecha }}</td>
                <td>                    
                    @if ($denuncia->estado == 0)
                    <span class="material-symbols-outlined" style="color: rgb(114, 240, 42)">
                        check
                    </span>
                    @else
                    <span class="material-symbols-outlined" style="color: rgb(240, 42, 42)">
                        pending
                    </span>
                    @endif
                </td>
                <td><a href="{{ asset('/'.$denuncia->file)}}" target="_blank">
                    <button type="button" class="btn btn-light">
                        <span class="material-symbols-outlined">
                            description
                        </span>
                    </button>
                </a>
                </td> 
                <td> <a href="{{ route('home.denuncias.pdf',$denuncia->id)}}" target="_blank">
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
<!-- /.container-fluid -->
@endsection