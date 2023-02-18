<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env( 'APP_NAME' ) }}</title>
    <link rel="stylesheet" href="{{ asset( 'css/style.css') }}" type="text/css">
</head>
<body>
    <h1>Mi primera página</h1>
    <p>Esta es mi primera página hecha con Laravel 9</p>
    
    @php
        $myName = 'Jose';
        $lecciones = [
            'Introducción',
            'Directorios',
            'Novedades',
            '<b>Composer</b>',
            '...'

        ]
    @endphp

    <p>Mi nombre es {{ $myName }} y estoy encantado de dar esta formación.</p>
    <h4>¿Qué hemos visto?</h4>

    <ul>
        @foreach ( $lecciones as $l)
            <li>{!! $l !!}</li> <!-- Exclamaciones para pintar con formato html-->
        @endforeach
    </ul>

    <script src="{{ asset( 'js/script.js' ) }}"></script>
</body>
</html>