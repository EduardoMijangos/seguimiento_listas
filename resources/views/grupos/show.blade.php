<!-- resources/views/grupos/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Grupo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalles del Grupo</h1>

        <div class="mb-3">
            <strong>Colmena:</strong>
            <p>{{ $grupo->colmena->numero_colmena }} - {{ $grupo->colmena->nombre_colmena }}</p>
        </div>

        <div class="mb-3">
            <strong>Nombre del Grupo:</strong>
            <p>{{ $grupo->nombre_grupo }}</p>
        </div>

        <div class="mb-3">
            <strong>Creado el:</strong>
            <p>{{ $grupo->created_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <div class="mb-3">
            <strong>Actualizado el:</strong>
            <p>{{ $grupo->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <a href="{{ route('grupos.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('grupos.edit', $grupo->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este grupo?')">Eliminar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
