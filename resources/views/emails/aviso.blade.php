<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aviso Servicio tecnico</title>
</head>
<body>
    <h1>Hola Amigo <b> {{ $contacto->nombredueno }} {{ $contacto->apellidodueno }} </b></h1>
    <p>Te esta hablando el servicio tecnico de compusolution <br>
    Te quiero decir que tu equipo <b> {{ $contacto->marcaequipo }} {{ $contacto->modeloequipo }} </b> ya esta arreglado y puedes pasar por el cuando desees de Lunes a Viernes de 8am a 6pm.
    </p>
    <p>En el caso de no poder a esa hora, puedes llamar al 987543243 o enviar un mensaje al whatsap para poder coordinar la entrega.</p>


</body>
</html>