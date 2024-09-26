<!-- resources/views/actividades/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Actividades</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Actividades Económicas</h1>

        @if ($actividades->isEmpty())
            <div class="alert alert-warning">No hay actividades registradas.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Actividad Económica</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actividades as $actividad)
                        <tr>
                            <td>{{ $actividad->id }}</td>
                            <td>{{ $actividad->actividad_economica }}</td>
                            <td>
                                <a href="{{ route('actividades.show', $actividad->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('actividades.edit', $actividad->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('actividades.create') }}" class="btn btn-success">Crear Nueva Actividad</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
