<!-- resources/views/colmenas/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Colmena</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Colmena</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('colmenas.update', $colmena->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="numero_colmena" class="form-label">Número de Colmena</label>
                <input type="text" name="numero_colmena" class="form-control" value="{{ old('numero_colmena', $colmena->numero_colmena) }}" required>
            </div>

            <div class="mb-3">
                <label for="nombre_colmena" class="form-label">Nombre de la Colmena</label>
                <input type="text" name="nombre_colmena" class="form-control" value="{{ old('nombre_colmena', $colmena->nombre_colmena) }}" required>
            </div>

            <div class="mb-3">
                <label for="sucursal" class="form-label">Sucursal</label>
                <select name="sucursal" class="form-select" required>
                    <option value="Matriz Zimatlán" {{ $colmena->sucursal == 'Matriz Zimatlán' ? 'selected' : '' }}>Matriz Zimatlán</option>
                    <option value="Sucursal Oaxaca" {{ $colmena->sucursal == 'Sucursal Oaxaca' ? 'selected' : '' }}>Sucursal Oaxaca</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Colmena</button>
            <a href="{{ route('colmenas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
