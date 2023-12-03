<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        background-image: url('{{ asset('imagen/detalleapartamento.jpg!d') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center ;
        background-attachment: fixed;
        margin: 0;

            text-align: center;
            margin: 20px;
    }
    #contenido {

            margin-top: 30px;
            color: #f0ecec;
        }

        table {
            background-color: rgba(43, 40, 40, 0.774);
    color: #fff;
    width: 450px;
    height: 500px;
    border-radius: 5px;
    padding: 30px 60px;
    margin-left: auto;
    margin-right: auto;
    transition: background-color 1s ease-in-out;
        }

        th, td {
            background-color: #3a3d3b;
    border: 4px solid #1f1b1b;
        }

        th {
            background-color: #251f1f;
            color: rgb(202, 221, 240);
        }

        .disponible-si {
            color: green;
        }

        .disponible-no {
            color: red;
        }

    </style>
</head>
<body>
    <div id="contenido">
        <h1>Detalles del Apartamento</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Campo</th>
                        <th>Información</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Número de Apartamento:</td>
                        <td th:text="${apartamento.numApartamento}"></td>
                    </tr>
                    <tr>
                        <td>Área:</td>
                        <td th:text="${apartamento.AreaApart}"></td>
                    </tr>
                    <tr>
                        <td>Precio por Metro:</td>
                        <td th:text="${apartamento.PrecioXmetro}"></td>
                    </tr>
                    <tr>
                        <td>Disponible:</td>
                        <td th:text="${apartamento.Disponible} ? 'Sí' : 'No'"
                            th:class="${apartamento.Disponible} ? 'disponible-si' : 'disponible-no'"></td>
                    </tr>
                    <tr>
                        <td>Dueño:</td>
                        <td th:text="${apartamento.Dueno.nombre}"></td>
                    </tr>
                    <tr>
                        <td>Inquilino:</td>
                        <td th:text="${apartamento.inquilino.nombre}"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
