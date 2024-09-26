<!-- resources/views/socias/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Socia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalles de la Socia</h1>

        <div class="mb-3">
            <strong>Nombre:</strong>
            <p>{{ $socia->nombre }}</p>
        </div>

        <div class="mb-3">
            <strong>Apellido:</strong>
            <p>{{ $socia->apellido }}</p>
        </div>

        <div class="mb-3">
            <strong>Dirección:</strong>
            <p>{{ $socia->direccion }}</p>
        </div>

        <div class="mb-3">
            <strong>Teléfono:</strong>
            <p>{{ $socia->telefono }}</p>
        </div>

        <div class="mb-3">
            <strong>Creada el:</strong>
            <p>{{ $socia->created_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <div class="mb-3">
            <strong>Actualizada el:</strong>
            <p>{{ $socia->updated_at->format('d/m/Y H:i:s') }}</p>
        </div>

        <a href="{{ route('socias.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('socias.edit', $socia->id) }}" class="btn btn-primary">Editar</a>
        <form action="{{ route('socias.destroy', $socia->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta socia?')">Eliminar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
