<!-- resources/views/colmenas/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Colmena</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalles de la Colmena</h1>

        <div class="mb-3">
            <strong>Número de Colmena:</strong>
            <p>{{ $colmena->numero_colmena }}</p>
        </div>

        <div class="mb-3">
            <strong>Nombre de la Colmena:</strong>
            <p>{{ $colmena->nombre_colmena }}</p>
        </div>

        <div class="mb-3">
            <strong>Sucursal:</strong>
            <p>{{ $colmena->sucursal }}</p>
        </div>

        <div class="mb-3">
            <strong>Creada el:</strong>
            <p>{{ $colmena->created_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <div class="mb-3">
            <strong>Actualizada el:</strong>
            <p>{{ $colmena->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <a href="{{ route('colmenas.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('colmenas.edit', $colmena->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('colmenas.destroy', $colmena->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta colmena?')">Eliminar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
