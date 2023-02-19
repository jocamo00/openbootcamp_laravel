<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ env('APP_NAME') }} | Contacto</title>
    </head>
    <body>
        <h1>Mi página de contacto</h1>
        <form action="/contacto" method="POST" autocomplete="off">
            @csrf<!-- protege de ataques-->
            <div>
                <label>Nombre</label>
                <input type="text" name="name" placeholder="Nombre">
            </div>
            <div>
                <label>Correo electrónico</label>
                <input type="text" name="name" placeholder="Correo electrónico">
            </div>
            <div>
                <label>Teléfono</label>
                <input type="text" name="phone" placeholder="Teléfono" maxlength="9">
            </div>
            <div>
                <label>Consulta</label>
                <textarea name="consulta" placeholder="Consulta"></textarea>
            </div>
            <div>
                <button>Enviar</button>
            </div>
            

        </form>
    </body>
</html>