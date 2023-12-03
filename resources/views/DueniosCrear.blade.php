<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Apartamento</title>

        <style>
        body {
            background-image: url('{{ asset('imagen/apartamentos-modernos.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center ;
            background-attachment: fixed;
            margin: 0;
        }
        #formulario {
    background-color: rgba(43, 40, 40, 0.774);
    color: #fff;
    width: 330px;
    height: 700px;
    border-radius: 5px;
    padding: 30px 60px;
    margin-left: auto;
    margin-right: auto;
    transition: background-color 1s ease-in-out;
}
#formulario:hover {
    background-color: #3a3d3b;
    border: 4px solid #fff;
}
#formulario h1 {
    font-size: 32px;
    font-weight: 700;


}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<a href="{{route('dueno.home')}}" class="btn btn-primary">Volver</a>
<body style="background-color:rgb(0, 0, 0) ; color:rgb(250, 250, 250);">
    <div id="contenido">
        <section id="formulario">
            <h1>Crear Nuevo Duenio</h1>
            <form action="" method="post">
                @csrf
                @method('POST')
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Nombre:</label>
                    <input type="text" name="nombre" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Apellido:</label>
                    <input type="text" name="apellido" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Telefono:</label>
                    <input type="text" name="telefono" style="padding: 5px; margin-bottom: 10px;">
                </div>
                <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
                    <label style="margin-bottom: 5px;">Correo:</label>
                    <input type="email" name="correo" style="margin-bottom: 10px;">
                </div>

                <input type="submit" value="Crear Duenio" style="padding: 5px;">
            </form>
        </section>
    </div>
</body>

</html>
