<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Denuncia N° 0{{ $denuncias->id }}-{{ $denuncias->created_at->format('Y') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
        @page {
            margin: 3m 1cm cm 1cm;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        body {
            background-image: url("{{ public_path('assets/img/fondopdf.png') }}");
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
            background-color: rgb(238, 238, 238);
        }

        .header {
            width: 100%;
        }

        .footer {
            width: 100%;
            bottom: 0cm;
        }

        .footer h3 {
            color: rgb(30, 30, 82);
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>
    <br>
    <div class="container">

        <div class="container">

            <div class="card">
                <div class="card-header">
                    <header class="header">
                        <table width="100%">
                            <tr>                                
                                <td align="center" style="line-height:1em;">
                                    <h3>COMISION REGIONAL ANTICORRUPCION DE APURIMAC</h3>
                                    <h4>GOBIERNO REGIONAL DE APURIMAC</h4>
                                    <p>"AÑO DEL BICENTENARIO"</p>
                                </td>
                            </tr>

                        </table>
                    </header>
                </div>
                <div class="card-body">
                    <table width="100%">
                        <tr>
                            <td align="center">
                                <h2><i><u>Denuncia N° 0{{ $denuncias->id }}-{{ $denuncias->created_at->format('Y')
                                            }}-GRAP/CRA</u></i>
                                </h2>
                            </td>
                        </tr>

                    </table>

                    <br />

                    <table width="100%" style="margin-left: 60px">
                        <tbody style="font-size: 1.2em">
                            <tr>
                                <th align="left" scope="row">
                                    <p>AL</p>
                                </th>
                                <th align="right">:</th>
                                <td align="left">Dr. Erwin A. Tayro Tayro <br> <strong>Presidente de la CRA
                                        Apurímac</strong>
                                </td>
                            </tr>
                            <tr>
                                <th align="left" scope="row">
                                    <p>FECHA</p>
                                </th>
                                <th align="right">:</th>
                                <td align="left">{{ $denuncias->created_at->format('d') }} de
                                    @php
                                    setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
                                    $month_timestamp = mktime(0, 0, 0, $denuncias->created_at->format('m'), 1,
                                    date('Y'));
                                    $mes_traducido = strftime('%B', $month_timestamp);

                                    echo '' . $mes_traducido .'';
                                    @endphp
                                    del {{ $denuncias->created_at->format('Y') }}
                                </td>
                            </tr>
                            <tr>
                                <th align="left" scope="row">
                                    <p>HORA</p>
                                </th>
                                <th align="right">:</th>
                                <td align="left">{{ $denuncias->created_at->format('H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <br />

                    <table width="87%" style="margin-left: 60px">
                        <thead style="background-color: lightgray;">
                            <tr style="font-size: 1.2em">
                                <th width="50%">
                                    <P>DENUNCIANTE</P>
                                </th>
                                <th width="50%">
                                    <P>DENUNCIADO</P>
                                </th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 1.2em">
                            <tr>
                                <td style="justify-content: center;">
                                    <strong>DNI: </strong>{{ $denuncias->dni }}
                                    <br>
                                    <strong>Nombre: </strong>{{ $denuncias->nombre }}
                                    <br>
                                    <strong>Celular: </strong>{{ $denuncias->telefono }}
                                    <br>
                                    <strong>Correo: </strong>{{ $denuncias->correo }}
                                </td>
                                <td>
                                    <strong>Nombre: </strong>{{ $denuncias->denunciado }}
                                    <br>
                                    <strong>Institucion: </strong>{{ $denuncias->institucion }}
                                    <br>
                                    <strong>Cargo: </strong>{{ $denuncias->cargo }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="margin: 60px">
                        <h3>Drescripcion de la denuncias</h3>
                        <p>
                            {{ $denuncias->descripcion }}
                        </p>
                        <hr>
                        <h3>Testigos</h3>
                        <p>
                            {{ $denuncias->testigos }}
                        </p>
                        <hr>
                        <h3>Evidencia</h3>
                        <ul>
                            <li>{{ $denuncias->file }}</li>
                        </ul>

                    </div>
                </div>
                <div class="card-header">
                    <footer class="footer">
                        <hr style="background: rgb(0, 0, 0)">
                        <table width="100%">
                            <tr>
                                <td align="left" style="line-height:1em;">
                                    <h3 style="margin-bottom: -10px;">www.regionapurimac.gop.pe</h3>
                                    <h3 style="margin-bottom: -10px;">Jr. Puno 107-Abancay-Apurimac-Perú</h3>
                                    <h3>083-321022</h3>
                                </td>
                            </tr>
                        </table>
                    </footer>
                </div>
            </div>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>