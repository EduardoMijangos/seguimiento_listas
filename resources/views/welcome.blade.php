<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Fincomunidad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e3f2fd; /* Fondo azul claro */
            color: #0d47a1; /* Texto azul oscuro */
        }
        .welcome-container {
            margin-top: 100px;
            text-align: center;
        }
        .btn-custom {
            background-color: #0d47a1;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container welcome-container">
        <h1 class="mb-4">Bienvenido a tu seguimiento de listas de créditos</h1>
        <h2 class="mb-4">Fincomunidad</h2>

        <div class="mb-4">
            <a href="{{ route('credits.index') }}" class="btn btn-custom btn-lg">Ver Créditos</a>
            <a href="{{ route('credits.create') }}" class="btn btn-custom btn-lg">Crear Nuevo Crédito</a>
            <a href="{{ route('socias.index') }}" class="btn btn-custom btn-lg">Ver Socias</a>
            <a href="{{ route('colmenas.index') }}" class="btn btn-custom btn-lg">Ver Colmenas</a>
            <a href="{{ route('actividades.index') }}" class="btn btn-custom btn-lg">Ver Actividades</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
