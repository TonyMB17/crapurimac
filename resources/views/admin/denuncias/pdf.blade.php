<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Denuncia N° 0{{ $denuncia->id }}-{{ $denuncia->created_at->format('Y') }}</title>

    <style type="text/css">
        @page {
            margin: 3cm 1cm 0cm 1cm;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        body {
            background-image: url("{{ public_path('assets/img/fondopdf.png') }}");
            background-repeat: no-repeat;
            background-size: 50%;
            background-position: center;
        }

        .header {
            position: fixed;
            width: 100%;
            top: -3cm
        }

        .footer {
            position: fixed;
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
    <header class="header">
        <table width="100%">
            <tr>
                <td valign="top" align="left"><img src="{{ public_path('assets/img/logo cra.png') }}" alt=""
                        width="80" /></td>
                <td align="center" style="line-height:1em;">
                    <h3 style="margin-bottom: -10px;">COMISION REGIONAL ANTICORRUPCION DE APURIMAC</h3>
                    <h4>GOBIERNO REGIONAL DE APURIMAC</h4>
                    <p>"AÑO DEL BICENTENARIO"</p>
                </td>
                <td valign="top" align="right"><img src="{{ public_path('assets/img/logo-gore.png') }}"
                        alt="" width="80" /></td>
            </tr>

        </table>
        <hr style="background: rgb(0, 0, 0)">
    </header>

    <table width="100%">
        <tr>
            <td align="center">
                <h2><i><u>Denuncia N° 0{{ $denuncia->id }}-{{ $denuncia->created_at->format('Y') }}-GRAP/CRA</u></i>
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
                <td align="left">Dr. Erwin A. Tayro Tayro <br> <strong>Presidente de la CRA Apurímac</strong></td>
            </tr>
            <tr>
                <th align="left" scope="row">
                    <p>FECHA</p>
                </th>
                <th align="right">:</th>
                <td align="left">{{ $denuncia->created_at->format('d') }} de 
                    @php
                        setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
                        $month_timestamp = mktime(0, 0, 0, $denuncia->created_at->format('m'), 1, date('Y'));
                        $mes_traducido = strftime('%B', $month_timestamp);

                        echo '' . $mes_traducido .'';
                    @endphp
                    del {{ $denuncia->created_at->format('Y') }}
                </td>
            </tr>
            <tr>
                <th align="left" scope="row">
                    <p>HORA</p>
                </th>
                <th align="right">:</th>
                <td align="left">{{ $denuncia->created_at->format('H:i') }}</td>
            </tr>
        </tbody>
    </table>

    <br />

    <table width="80%" style="margin-left: 60px">
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
                <td>
                    <strong>DNI: </strong>{{ $denuncia->dni }}
                    <br>
                    <strong>Nombre: </strong>{{ $denuncia->nombre }}
                    <br>
                    <strong>Celular: </strong>{{ $denuncia->telefono }}
                    <br>
                    <strong>Correo: </strong>{{ $denuncia->correo }}
                </td>
                <td>
                    <strong>Nombre: </strong>{{ $denuncia->denunciado }}
                    <br>
                    <strong>Institucion: </strong>{{ $denuncia->institucion }}
                    <br>
                    <strong>Cargo: </strong>{{ $denuncia->cargo }}
                </td>
            </tr>
        </tbody>
    </table>
    <div style="margin: 60px">
        <h3>Drescripcion de la denuncia</h3>
        <p>
            {{ $denuncia->descripcion }}
        </p>
        <hr>
        <h3>Testigos</h3>
        <p>
            {{ $denuncia->testigos }}
        </p>
        <hr>
        <h3>Evidencia</h3>
        <ul>
            <li>{{ $denuncia->file }}</li>
        </ul>

    </div>

    <footer class="footer">
        <hr style="background: rgb(0, 0, 0)">
        <table width="100%">
            <tr>
                <td align="left" style="line-height:1em;">
                    <h3 style="margin-bottom: -10px;">www.regionapurimac.gop.pe</h3>
                    <h3 style="margin-bottom: -10px;">Jr. Puno 107-Abancay-Apurimac-Perú</h3>
                    <h3>083-321022</h3>
                </td>
                <td valign="top" align="right"><img src="{{ public_path('assets/img/logo-gore.png') }}"
                        alt="" width="80" /></td>
            </tr>
        </table>
    </footer>
</body>

</html>
