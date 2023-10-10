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
                <h1>RESPUESTA A SU DENUNCIA</strong></h1>                
            </div>
            <div class="card-body">
                <div class="border-bottom-dark mb-4 py-4">
                    <h2><strong>ASUNTO:</strong></h2>                    
                    <p style="white-space: pre;">Respuesta a la denuncia: {{ $email->subject }}</p>
                </div>
                <div class="border-bottom-dark mb-4 py-4">
                    <h2><strong>Respuesta:</strong></h2>                    
                    <p style="white-space: pre;">{{ $email->message }}</p>
                </div>

            </div>
        </div>
</body>
</html>