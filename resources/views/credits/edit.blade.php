<!DOCTYPE html>

<!--faltas-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Crédito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Crédito</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('credits.update', $credit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $credit->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="{{ $credit->fecha_entrega }}" required>
            </div>
            <div class="mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo" value="{{ $credit->grupo }}" required>
            </div>
            <div class="mb-3">
                <label for="cantidad_credito" class="form-label">Cantidad de Crédito</label>
                <input type="number" class="form-control" id="cantidad_credito" name="cantidad_credito" value="{{ $credit->cantidad_credito }}" required>
            </div>
            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" id="saldo" name="saldo" value="{{ $credit->saldo }}" required>
            </div>
            <div class="mb-3">
                <label for="abono" class="form-label">Abono</label>
                <input type="number" class="form-control" id="abono" name="abono" value="{{ $credit->abono }}" required>
            </div>
            <div class="mb-3">
                <label for="recuperado" class="form-label">Recuperado</label>
                <input type="number" class="form-control" id="recuperado" name="recuperado" value="{{ $credit->recuperado }}" required>
            </div>
            <div class="mb-3">
                <label for="estatus" class="form-label">Estatus</label>
                <input type="text" class="form-control" id="estatus" name="estatus" value="{{ $credit->estatus }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Crédito</button>
            <a href="{{ route('credits.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>


falta