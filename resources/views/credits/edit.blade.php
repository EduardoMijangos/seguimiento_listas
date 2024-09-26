<!-- resources/views/credits/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Crédito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Crédito</h1>

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
                <label for="socia_id" class="form-label">Nombre de la Socia</label>
                <select name="socia_id" class="form-select" required>
                    @foreach($socias as $socia)
                        <option value="{{ $socia->id }}" {{ $socia->id == $credit->socia_id ? 'selected' : '' }}>
                            {{ $socia->nombre1 }} {{ $socia->apellido_paterno }} {{ $socia->apellido_materno }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="colmena_id" class="form-label">Colmena</label>
                <select name="colmena_id" class="form-select" required>
                    @foreach($colmenas as $colmena)
                        <option value="{{ $colmena->id }}" {{ $colmena->id == $credit->colmena_id ? 'selected' : '' }}>
                            {{ $colmena->numero_colmena }} - {{ $colmena->nombre_colmena }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                <input type="date" name="fecha_entrega" class="form-control" value="{{ $credit->fecha_entrega }}" required>
            </div>

            <div class="mb-3">
                <label for="proposito" class="form-label">Propósito</label>
                <select name="proposito" class="form-select" required>
                    @foreach($actividads as $actividad)
                        <option value="{{ $actividad->id }}" {{ $actividad->id == $credit->proposito ? 'selected' : '' }}>
                            {{ $actividad->actividad_economica }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="ciclo" class="form-label">Ciclo</label>
                <input type="number" name="ciclo" class="form-control" value="{{ $credit->ciclo }}" required>
            </div>

            <div class="mb-3">
                <label for="plazo" class="form-label">Plazo</label>
                <input type="number" name="plazo" class="form-control" value="{{ $credit->plazo }}" required>
            </div>

            <div class="mb-3">
                <label for="credito" class="form-label">Cantidad del Crédito</label>
                <input type="number" name="credito" class="form-control" value="{{ $credit->credito }}" required>
            </div>

            <div class="mb-3">
                <label for="aportacion_social" class="form-label">Aportación Social</label>
                <input type="number" name="aportacion_social" class="form-control" value="{{ $credit->aportacion_social }}">
            </div>

            <div class="mb-3">
                <label for="abono" class="form-label">Abono</label>
                <input type="number" name="abono" class="form-control" value="{{ $credit->abono }}" required>
            </div>

            <div class="mb-3">
                <label for="saldo_credito" class="form-label">Saldo Crédito</label>
                <input type="number" name="saldo_credito" class="form-control" value="{{ $credit->saldo_credito }}" required>
            </div>

            <div class="mb-3">
                <label for="creditos_otorgados" class="form-label">Créditos Otorgados</label>
                <input type="number" name="creditos_otorgados" class="form-control" value="{{ $credit->creditos_otorgados }}" required>
            </div>

            <div class="mb-3">
                <label for="total_recuperado_credito" class="form-label">Total Recuperado Crédito</label>
                <input type="number" name="total_recuperado_credito" class="form-control" value="{{ $credit->total_recuperado_credito }}" required>
            </div>

            <div class="mb-3">
                <label for="total_recuperado_aportacion" class="form-label">Total Recuperado Aportación</label>
                <input type="number" name="total_recuperado_aportacion" class="form-control" value="{{ $credit->total_recuperado_aportacion }}" required>
            </div>

            <div class="mb-3">
                <label for="saldo_final" class="form-label">Saldo Final</label>
                <input type="number" name="saldo_final" class="form-control" value="{{ $credit->saldo_final }}" required>
            </div>

            <div class="mb-3">
                <label for="estatus" class="form-label">Estatus</label>
                <input type="text" name="estatus" class="form-control" value="{{ $credit->estatus }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
