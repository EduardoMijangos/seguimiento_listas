<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Crédito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalles del Crédito</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $credit->id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $credit->nombre }}</td>
            </tr>
            <tr>
                <th>Fecha de Entrega</th>
                <td>{{ $credit->fecha_entrega }}</td>
            </tr>
            <tr>
                <th>Grupo</th>
                <td>{{ $credit->grupo }}</td>
            </tr>
            <tr>
                <th>Cantidad de Crédito</th>
                <td>{{ $credit->cantidad_credito }}</td>
            </tr>
            <tr>
                <th>Saldo</th>
                <td>{{ $credit->saldo }}</td>
            </tr>
            <tr>
                <th>Abono</th>
                <td>{{ $credit->abono }}</td>
            </tr>
            <tr>
                <th>Recuperado</th>
                <td>{{ $credit->recuperado }}</td>
            </tr>
            <tr>
                <th>Estatus</th>
                <td>{{ $credit->estatus }}</td>
            </tr>
        </table>

        <a href="{{ route('credits.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</body>
</html>
