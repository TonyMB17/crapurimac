<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DENUNCIA {{$denuncia->id}}</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="display: flex; align-items: flex-end">
            <div class="col-xs-2">
                <img class="img img-responsive" src="" alt="Logotipo">
            </div>
            <div class="col-xs-10 ">
                <h1 style="color: rgb(168, 8, 8)">CRAA</h1>
                <h4>COMISION REGIONAL ANTICORRUPCION DE APURIMAC</h4>
            </div>            
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-10">
            </div>
            <div class="col-xs-2 text-center">
                <h2>Denuncia N° 00{{$denuncia->id}}/{{$denuncia->created_at}}</h2>
            </div>
        </div>
        <hr>
        <div class="row text-center" style="margin-bottom: 2rem;">
            <div class="col-xs-6">
                <h3 class="h2">Denunciante</h3>
                <span>DNI: <strong>{{$denuncia->dni}}</strong></span><br>
                <span>NOMBRE: <strong>{{$denuncia->nombre}}</strong></span><br>
                <span>TELEFONO: <strong>{{$denuncia->telefono}}</strong></span><br>
                <span>EMAIL: <strong>{{$denuncia->correo}}</strong></span>
            </div>
            <div class="col-xs-6">
                <h3 class="h2">Denunciado</h3>
                <span>NOMBRE: <strong>{{$denuncia->denunciado}}</strong></span><br>
                <span>INSTITUCION: <strong>{{$denuncia->institucion}}</strong></span><br>
                <span>CARGO: <strong>{{$denuncia->cargo}}</strong></span>
            </div>
        </div>
        <hr>
        <h3>Drescripcion de la denuncia</h3>
        <p>
            {{$denuncia->descripcion}}
        </p>
        <hr>
        <h3>Testigos</h3>
        <p>
            {{$denuncia->testigos}}
        </p>
        <hr>
        <h3>Evidencia</h3>
        <p>
            <ul>
                <li>{{$denuncia->file}}</li>
            </ul>            
        </p>
        <div class="row">
            <div class="col-xs-12 text-center">
            </div>
        </div>
    </div>
</body>

</html>