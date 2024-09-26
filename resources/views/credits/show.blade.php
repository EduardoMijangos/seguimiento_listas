<!-- resources/views/credits/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Crédito</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalle del Crédito #{{ $credit->id }}</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Nombre de la Socia:</strong> {{ $credit->socia->nombre_completo ?? 'N/A' }} </p>
                <p><strong>Colmena:</strong> {{ $credit->colmena->numero_colmena ?? 'N/A' }} - {{ $credit->colmena->nombre_colmena ?? 'N/A' }}</p>
                <p><strong>Fecha de Entrega:</strong> {{ $credit->fecha_entrega }}</p>
                <p><strong>Propósito:</strong> {{ $credit->actividad->actividad_economica ?? 'N/A' }}</p>
                <p><strong>Ciclo:</strong> {{ $credit->ciclo }}</p>
                <p><strong>Plazo:</strong> {{ $credit->plazo }}</p>
                <p><strong>Cantidad del Crédito:</strong> {{ $credit->credito }}</p>
                <p><strong>Aportación Social:</strong> {{ $credit->aportacion_social }}</p>
                <p><strong>Abono:</strong> {{ $credit->abono }}</p>
                <p><strong>Saldo Crédito:</strong> {{ $credit->saldo_credito }}</p>
                <p><strong>Estatus:</strong> {{ $credit->estatus }}</p>
            </div>
        </div>

        <a href="{{ route('credits.index') }}" class="btn btn-primary mt-3">Volver</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
