<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de PDFs de Precios</title>
    <style>
        .menu-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            font-family: Arial, sans-serif;
        }
        .btn-group {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            text-align: center;
        }
        .btn-view { background-color: #28a745; }
        .btn-view:hover { background-color: #218838; }
        .btn-upload { background-color: #007bff; }
        .btn-upload:hover { background-color: #0069d9; }
    </style>
</head>
<body>

    <div class="menu-container">
        <h2>Panel de Control - PDFs de Precios</h2>
        <div class="btn-group">
            <a href="{{ route('pdf.list') }}" class="btn btn-view">Ver archivo</a>
            
            <a href="{{ route('pdf.index') }}" class="btn btn-upload">Cargar archivo</a>
        </div>
    </div>

</body>
</html>