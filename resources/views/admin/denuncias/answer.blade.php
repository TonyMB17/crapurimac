@extends('home')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Responder</h1>
        </div>

        <!-- Default Card Example -->
        <div class="card mb-4">
            <div class="card-header">
                Datos de la Denuncia N°: <strong>{{ $denuncia->id }}</strong> / <strong>{{ $denuncia->created_at }}</strong>
            </div>
            <div class="card-body">
                <div class="row border-bottom-dark">
                    <div class="col-lg-6">
                        <h5><strong>DENUNCIANTE</strong></h5>
                        <h6><strong>Nombre:</strong></h6>
                        <p>{{ $denuncia->nombre }}</p>
                        <h6><strong>DNI:</strong></h6>
                        <p>{{ $denuncia->dni }}</p>
                        <h6><strong>Telefono:</strong></h6>
                        <p>{{ $denuncia->telefono }}</p>
                        <h6><strong>Correo:</strong></h6>
                        <p>{{ $denuncia->correo }}</p>
                    </div>
                    <div class="col-lg-6">
                        <h5><strong>DENUNCIADO</strong></h5>
                        <h6><strong>Nombre:</strong></h6>
                        <p>{{ $denuncia->denunciado }}</p>
                        <h6><strong>Cargo:</strong></h6>
                        <p>{{ $denuncia->cargo }}</p>
                        <h6><strong>Institucion:</strong></h6>
                        <p>{{ $denuncia->institucion }}</p>
                    </div>
                </div>
                <div class="border-bottom-dark mb-4 py-4">
                    <h4><strong>Descripcion:</strong></h4>
                    <p style="white-space: pre;">{{ $denuncia->descripcion }}</p>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <h6><strong>Fecha del incidente:</strong></h6>
                        <p>{{ $denuncia->fecha }}</p>
                        <h6><strong>Archivos:</strong></h6>
                        <p>{{ $denuncia->file }}</p>
                    </div>
                    <div class="col-lg-6">
                        <h6><strong>Testigos:</strong></h6>
                        <p>{{ $denuncia->testigos }}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="card mb-4">
            <form action="{{ route('denuncias.checked', $denuncia->id) }}" method="post">
                @csrf
                <div class="card-header">
                    Respuesta a la denuncia:
                </div>
                <div class="card-body">
                    <div class="row border-bottom-success mb-4 py-4">
                        <div class="col-lg-6">
                            <h5><strong>DE:</strong></h5>
                            <input type="email" name="email" id="recipient-name" class="form-control" value="Anticorrupcionapurimac@regionapurimac.gob.pe" required disabled>
                        </div>
                        <div class="col-lg-6">
                            <h5><strong>PARA:</strong></h5>
                            <input type="email" name="emailDest" id="recipient-name" class="form-control" value="{{ $denuncia->correo }}" required disabled>
                        </div>
                    </div>
                    <div class="border-bottom-success mb-4 py-4">
                        <h4><strong>Asunto:</strong></h4>
                        <input type="email" name="subject" id="recipient-name" class="form-control" value="Respuesta a la denuncia: {{ $denuncia->created_at }}" required disabled>
                        
                    </div>
                    <div class="border-bottom-success mb-4 py-4">
                        <h4><strong>Mensaje:</strong></h4>
                        <textarea name="message" class="form-control" id="message-text" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('home.denuncias') }}">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                    </a>
                    <button type="submit" class="btn btn-success">Enviar Correo</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
