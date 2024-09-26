<!-- resources/views/socias/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Socias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Socias</h1>

        @if ($socias->isEmpty())
            <div class="alert alert-warning">No hay socias registradas.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Grupo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($socias as $socia)
                        <tr>
                            <td>{{ $socia->id }}</td>
                            <td>{{ $socia->nombre1 }}</td>
                            <td>{{ $socia->nombre2 ?? 'N/A' }}</td>
                            <td>{{ $socia->apellido_paterno }}</td>
                            <td>{{ $socia->apellido_materno }}</td>
                            <td>{{ $socia->grupo->nombre_grupo }}</td>
                            <td>
                                <a href="{{ route('socias.show', $socia->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('socias.edit', $socia->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('socias.destroy', $socia->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de eliminar esta socia?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('socias.create') }}" class="btn btn-success">Crear Nueva Socia</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
