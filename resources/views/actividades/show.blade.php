<!-- resources/views/actividades/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Actividad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalles de la Actividad</h1>

        <div class="mb-3">
            <strong>Actividad Económica:</strong>
            <p>{{ $actividad->actividad_economica }}</p>
        </div>

        <div class="mb-3">
            <strong>Creada el:</strong>
            <p>{{ $actividad->created_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <div class="mb-3">
            <strong>Actualizada el:</strong>
            <p>{{ $actividad->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('actividades.edit', $actividad->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('actividades.destroy', $actividad->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta actividad?')">Eliminar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
