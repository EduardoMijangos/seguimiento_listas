<!-- resources/views/credits/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Créditos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Créditos</h1>

        <!-- Mensaje de éxito -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Verificar si hay créditos -->
        @if ($credits->isEmpty())
            <div class="alert alert-warning">No hay créditos registrados.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Fecha de Entrega</th>
                        <th>Grupo</th>
                        <th>Propósito</th>
                        <th>Ciclo</th>
                        <th>Plazo</th>
                        <th>Cantidad Crédito</th>
                        <th>Aportación Social</th>
                        <th>Saldo</th>
                        <th>Abono</th>
                        <th>Recuperado</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($credits as $credit)
                        <tr>
                            <td>{{ $credit->id }}</td>
                            <td>{{ $credit->nombre }}</td>
                            <td>{{ $credit->fecha_entrega }}</td>
                            <td>{{ $credit->grupo }}</td>
                            <td>{{ $credit->proposito }}</td>
                            <td>{{ $credit->ciclo }}</td>
                            <td>{{ $credit->plazo }}</td>
                            <td>{{ $credit->cantidad_credito }}</td>
                            <td>{{ $credit->aportacion_social ?? 'N/A' }}</td>
                            <td>{{ $credit->saldo }}</td>
                            <td>{{ $credit->abono }}</td>
                            <td>{{ $credit->recuperado }}</td>
                            <td>{{ $credit->estatus }}</td>
                            <td class="d-flex">
                                <a href="{{ route('credits.show', $credit->id) }}" class="btn btn-info btn-sm me-1">Ver</a>
                                <a href="{{ route('credits.edit', $credit->id) }}"
                                    class="btn btn-primary btn-sm me-1">Editar</a>
                                <form action="{{ route('credits.destroy', $credit->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de eliminar este crédito?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Botón para crear un nuevo crédito -->
        <a href="{{ route('credits.create') }}" class="btn btn-success">Crear Nuevo Crédito</a>
    </div>

    <!-- Agregamos el JS necesario para que Bootstrap funcione correctamente -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>