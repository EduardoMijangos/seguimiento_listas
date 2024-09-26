<!-- resources/views/actividades/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Actividad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Actividad</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('actividades.update', $actividad->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="actividad_economica" class="form-label">Actividad Económica</label>
                <input type="text" name="actividad_economica" class="form-control" value="{{ old('actividad_economica', $actividad->actividad_economica) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Actividad</button>
            <a href="{{ route('actividades.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
