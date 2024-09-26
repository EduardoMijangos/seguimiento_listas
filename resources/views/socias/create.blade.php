<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Socia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Crear Nueva Socia</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('socias.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="grupo_id" class="form-label">Grupo</label>
                <select name="grupo_id" class="form-select" required>
                    <option value="">Seleccione un grupo</option>
                    @foreach($grupos as $grupo)
                        <option value="{{ $grupo->id }}">{{ $grupo->nombre_grupo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="colmena_id" class="form-label">Colmena</label>
                <select name="colmena_id" class="form-select" required>
                    <option value="">Seleccione una colmena</option>
                    @foreach($colmenas as $colmena)
                        <option value="{{ $colmena->id }}">{{ $colmena->nombre_colmena }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nombre1" class="form-label">Primer Nombre</label>
                <input type="text" name="nombre1" class="form-control" value="{{ old('nombre1') }}" required>
            </div>

            <div class="mb-3">
                <label for="nombre2" class="form-label">Segundo Nombre</label>
                <input type="text" name="nombre2" class="form-control" value="{{ old('nombre2') }}">
            </div>

            <div class="mb-3">
                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" class="form-control" value="{{ old('apellido_paterno') }}" required>
            </div>

            <div class="mb-3">
                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" class="form-control" value="{{ old('apellido_materno') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('socias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
