<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card mb-4">
            <div class="card-header">
                <h1>Datos de la denuncias N°: <strong>{{ $denuncias->id }}</strong> / <strong>{{ $denuncias->created_at }}</strong></h1>                
            </div>
            <div class="card-body">
                <div class="row border-bottom-dark">
                    <div class="col-lg-6">
                        <h2><strong>DENUNCIANTE</strong></h2>
                        <p><strong>Nombre:</strong></p>
                        <p id="p">{{ $denuncias->nombre }}</p>
                        <p><strong>DNI:</strong></p>
                        <p id="p">{{ $denuncias->dni }}</p>
                        <p><strong>Telefono:</strong></p>
                        <p id="p">{{ $denuncias->telefono }}</p>
                        <p><strong>Correo:</strong></p>
                        <p id="p">{{ $denuncias->correo }}</p>
                    </div>
                    <div class="col-lg-6">
                        <h2><strong>DENUNCIADO</strong></h2>
                        <p><strong>Nombre:</strong></p>
                        <p id="p">{{ $denuncias->denunciado }}</p>
                        <p><strong>Cargo:</strong></p>
                        <p id="p">{{ $denuncias->cargo }}</p>
                        <p><strong>Institucion:</strong></p>
                        <p id="p">{{ $denuncias->institucion }}</p>
                    </div>
                </div>
                <div class="border-bottom-dark mb-4 py-4">
                    <h2><strong>Descripcion:</strong></h2>                    
                    <p style="white-space: pre;">{{ $denuncias->descripcion }}</p>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-6">
                        <h2><strong>Fecha del incidente:</strong></h2>
                        <p id="p">{{ $denuncias->fecha }}</p>
                        <h2><strong>Archivos:</strong></h2>
                        <p id="p">{{ $denuncias->file }}</p>
                    </div>
                    <div class="col-lg-6">
                        <h2><strong>Testigos:</strong></h2>
                        <p id="p">{{ $denuncias->testigos }}</p>
                    </div>
                </div>

            </div>
        </div>
</body>
</html>