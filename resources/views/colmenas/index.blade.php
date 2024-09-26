<!-- resources/views/colmenas/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Colmenas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Colmenas</h1>

        @if ($colmenas->isEmpty())
            <div class="alert alert-warning">No hay colmenas registradas.</div>
        @else
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Número</th>
                        <th>Nombre</th>
                        <th>Sucursal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($colmenas as $colmena)
                        <tr>
                            <td>{{ $colmena->id }}</td>
                            <td>{{ $colmena->numero_colmena }}</td>
                            <td>{{ $colmena->nombre_colmena }}</td>
                            <td>{{ $colmena->sucursal }}</td>
                            <td>
                                <a href="{{ route('colmenas.show', $colmena->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('colmenas.edit', $colmena->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('colmenas.destroy', $colmena->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('¿Estás seguro de eliminar esta colmena?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{ route('colmenas.create') }}" class="btn btn-success">Crear Nueva Colmena</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
