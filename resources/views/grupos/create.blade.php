<!-- resources/views/grupos/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Grupo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Crear Nuevo Grupo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('grupos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="colmena_id" class="form-label">Colmena</label>
                <select name="colmena_id" class="form-select">
                    @foreach($colmenas as $colmena)
                        <option value="{{ $colmena->id }}">{{ $colmena->nombre_colmena }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nombre_grupo" class="form-label">Nombre del Grupo</label>
                <input type="text" name="nombre_grupo" class="form-control" value="{{ old('nombre_grupo') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
