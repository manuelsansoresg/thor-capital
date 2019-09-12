<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body bgcolor="#FFFFFF">
    @include('mail.sections.style')

    @include('mail.sections.header')
    <!-- BODY -->
    <table class="body-wrap">
        <tr>
            <td></td>
            <td class="container" bgcolor="#FFFFFF">

                <div class="content">
                    <table>
                        <tr>
                            <td>
                                <h3>¡Tienes una nueva solicitud!</h3>
                                <h4> {{$request['name']}} quiere comunicarse con nosotros.</h4>
                                <p class="lead">Datos del usuario : </p>
                                <p class="callout">
                                    Nombre: {{$request['name']}}
                                    <br>
                                    Email: {{$request['email']}}
                                    <br>
                                    Teléfono: {{$request['phone']}}
                                    <br>
                                    Mensaje: {{$request['message']}}

                                    <br>
                                </p>
                                <p>
                                    No olvides contactarlo lo antes posible para brindarle la información que necesita.
                                </p>
                                <!-- Callout Panel -->
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->

            </td>
            <td></td>
        </tr>
    </table><!-- /BODY -->
</body>

</html>
