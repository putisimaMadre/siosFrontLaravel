<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de PDFs de Precios</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f8f9fa; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn-back { text-decoration: none; color: #007bff; font-size: 15px; font-weight: bold; }
        .btn-back:hover { text-decoration: underline; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f1f3f5; color: #333; }
        .btn-download { display: inline-block; padding: 6px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px; font-size: 14px; }
        .btn-download:hover { background-color: #218838; }
        .no-files { text-align: center; color: #666; padding: 20px; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Archivos PDF Disponibles</h2>
        <a href="{{ route('pdf.menu') }}" class="btn-back">← Volver al Menú</a>
    </div>

    @if($pdfs->isEmpty())
        <p class="no-files">No se ha subido ningún archivo todavía.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nombre del Archivo</th>
                    <th>Fecha de Carga</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pdfs as $pdf)
                    <tr>
                        <td><strong>{{ $pdf->nombre }}</strong></td>
                        <td>{{ $pdf->created_at->format('d/m/Y h:i A') }}</td>
                        <td>
                            <a href="{{ route('pdf.download.id', $pdf->id) }}" class="btn-download">
                                Descargar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</body>
</html>