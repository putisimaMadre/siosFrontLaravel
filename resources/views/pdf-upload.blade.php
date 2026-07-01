<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir PDF de Precios</title>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
            max-width: 600px;
            margin: 50px auto;
            padding: 50px;
            text-align: center;
        }

        .btn-back { text-decoration: none; color: #007bff; font-size: 15px; font-weight: bold; }
        .btn-back:hover { text-decoration: underline; }
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f8f9fa; }
    </style>
</head>
<body>

    <div class="container">
        <h2 style="text-align: center; margin-top: 30px;">Arrastra tu PDF de Precios</h2>
        
        <form action="{{ route('pdf.store') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="pdf-dropzone">
            @csrf
            <div class="dz-message" data-dz-message>
                <span>Arrastra aquí el archivo PDF o haz clic para buscarlo.</span>
            </div>
        </form>

        <div style="max-width: 600px; margin: 20px auto 0 auto;">
            <a href="{{ route('pdf.menu') }}" class="btn-back">
                ← Regresar al Menú Principal
            </a>
        </div>
    </div>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script>
        Dropzone.options.pdfDropzone = {
            paramName: "file", // El nombre que recibirá el Request en Laravel ($request->file('file'))
            maxFilesize: 10, // Tamaño máximo en MB
            acceptedFiles: ".pdf", // Solo permitir PDFs
            dictInvalidFileType: "No puedes subir archivos de este tipo. Solo se permiten PDFs.",
            dictFileTooBig: "El archivo es muy grande. El tamaño máximo es de 10MB.",
            success: function(file, response) {
                alert('¡PDF guardado con éxito como: ' + response.filename + '!');
            },
            error: function(file, response) {
                alert('Hubo un error al subir el archivo.');
            }
        };
    </script>
</body>
</html>