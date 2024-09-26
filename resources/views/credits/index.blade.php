<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Créditos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Créditos</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if ($credits->isEmpty())
            <div class="alert alert-warning">No hay créditos registrados.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Colmena</th>
                        <th>Fecha de Entrega</th>
                        <th>Propósito</th>
                        <th>Ciclo</th>
                        <th>Plazo</th>
                        <th>Crédito</th>
                        <th>Aportación Social</th>
                        <th>Abono</th>
                        <th>Saldo Crédito</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($credits as $credit)
                        <tr>
                            <td>{{ $credit->id }}</td>
                            <td>{{ $credit->socia->nombre_completo ?? 'N/A' }}</td> <!-- Muestra el nombre de la socia -->
                            <td>
                                {{ $credit->colmena->numero_colmena ?? 'N/A' }} - {{ $credit->colmena->nombre_colmena ?? 'N/A' }} <!-- Ajuste aquí -->
                            </td>
                            <td>{{ $credit->fecha_entrega }}</td>
                            <td>{{ $credit->actividad->actividad_economica ?? 'N/A' }}</td> <!-- Acceso al nombre de la actividad -->
                            <td>{{ $credit->ciclo }}</td>
                            <td>{{ $credit->plazo }}</td>
                            <td>{{ $credit->credito }}</td>
                            <td>{{ $credit->aportacion_social ?? 'N/A' }}</td>
                            <td>{{ $credit->abono }}</td>
                            <td>{{ $credit->saldo_credito }}</td>
                            <td>{{ $credit->estatus }}</td>
                            <td>
                                <a href="{{ route('credits.show', $credit->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('credits.edit', $credit->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('credits.destroy', $credit->id) }}" method="POST" style="display:inline;">
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

        <a href="{{ route('credits.create') }}" class="btn btn-success">Crear Nuevo Crédito</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
