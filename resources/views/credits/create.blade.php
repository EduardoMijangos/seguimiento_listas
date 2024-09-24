<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Crédito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nuevo Crédito</h1>

        <!-- Mostrar errores de validación si existen -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario para crear crédito -->
        <form action="{{ route('credits.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>
            
            <div class="mb-3">
                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" value="{{ old('fecha_entrega') }}" required>
            </div>

            <div class="mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo" value="{{ old('grupo') }}" required>
            </div>

            <div class="mb-3">
                <label for="proposito" class="form-label">Propósito del Crédito</label>
                <input type="text" class="form-control" id="proposito" name="proposito" value="{{ old('proposito') }}" required>
            </div>

            <div class="mb-3">
                <label for="ciclo" class="form-label">Ciclo</label>
                <input type="text" class="form-control" id="ciclo" name="ciclo" value="{{ old('ciclo') }}" required>
            </div>

            <div class="mb-3">
                <label for="plazo" class="form-label">Plazo</label>
                <input type="text" class="form-control" id="plazo" name="plazo" value="{{ old('plazo') }}" required>
            </div>

            <div class="mb-3">
                <label for="cantidad_credito" class="form-label">Cantidad de Crédito</label>
                <input type="number" class="form-control" id="cantidad_credito" name="cantidad_credito" value="{{ old('cantidad_credito') }}" required>
            </div>

            <div class="mb-3">
                <label for="aportacion_social" class="form-label">Aportación Social</label>
                <input type="number" class="form-control" id="aportacion_social" name="aportacion_social" value="{{ old('aportacion_social') }}">
            </div>

            <div class="mb-3">
                <label for="saldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" id="saldo" name="saldo" value="{{ old('saldo') }}" required>
            </div>

            <div class="mb-3">
                <label for="abono" class="form-label">Abono</label>
                <input type="number" class="form-control" id="abono" name="abono" value="{{ old('abono') }}" required>
            </div>

            <div class="mb-3">
                <label for="recuperado" class="form-label">Recuperado</label>
                <input type="number" class="form-control" id="recuperado" name="recuperado" value="{{ old('recuperado') }}" required>
            </div>

            <div class="mb-3">
                <label for="estatus" class="form-label">Estatus</label>
                <input type="text" class="form-control" id="estatus" name="estatus" value="{{ old('estatus') }}" required>
            </div>

            <!-- Botones de acción -->
            <button type="submit" class="btn btn-primary">Crear Crédito</button>
            <a href="{{ route('credits.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Agregar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<<<<<<< HEAD
=======


falta que funcione
>>>>>>> parent of f700570 (correciones)
