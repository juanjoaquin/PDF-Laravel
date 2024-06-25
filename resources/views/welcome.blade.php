<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
        <h1>Hola mundillo</h1>

        <h3>Descargar el PDF:</h3>
        <a href="{{ route('download') }}">Descarga aquí</a>
</body>
</html>