<?php

namespace App\Http\Controllers;

use App\Models\PdfUpload;
use App\Models\PrecioPdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PdfUploadController extends Controller
{
    // Muestra la nueva pantalla con los dos botones
    public function menu()
    {
        return view('pdf-menu');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pdf-upload');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            // Validar que realmente sea un PDF
            /*$request->validate([
                'file' => 'required|mimes:pdf|max:10240',
            ]);*/

            // Cambia esto temporalmente en tu store():
            $request->validate([
                'file' => 'required', // Quitamos momentáneamente mimes y max para testear
            ]);

            /*if ($request->hasFile('file')) {
                $file = $request->file('file');

                // Configurar el idioma de Carbon a español para obtener el mes correctamente
                Carbon::setLocale('es');
                $mesActual = strtolower(Carbon::now()->translatedFormat('F')); // "enero", "febrero", etc.

                // Estructura del nombre: enero_pdfprice.pdf
                $nombreArchivo = $mesActual . '_pdfprice.' . $file->getClientOriginalExtension();

                // Guardar el archivo en el disco 'public' (storage/app/public/pdfs)
                $rutaPublica = $file->storeAs('pdfs', $nombreArchivo, 'public');

                // Guardar en la Base de Datos
                // Asumiendo que tienes un modelo llamado PrecioPdf con los campos 'nombre' y 'ruta'
                $pdfReg = new PdfUpload();
                $pdfReg->nombre = $nombreArchivo;
                $pdfReg->ruta = $rutaPublica; 
                $pdfReg->save();

                // Responder a Dropzone con éxito
                return response()->json([
                    'success' => true,
                    'filename' => $nombreArchivo
                ]);
            }*/

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // 1. Obtener el nombre original del archivo sin la extensión (.pdf)
            $nombreOriginal = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            // 2. Extraer todo lo que esté ANTES del primer guion bajo "_"
            // Si el archivo es "enero_B650ProRSSpanish_removed", $soloMes será "enero"
            $soloMes = Str::before($nombreOriginal, '_');

            // 3. Opcional: Asegurar que quede en minúsculas por limpieza
            $soloMes = strtolower($soloMes);

            // 4. Construir la estructura final que requieres: "enero_pdfprice.pdf"
            $nombreArchivo = $soloMes . '_pdfprice.' . $file->getClientOriginalExtension();

            // 5. Guardar el archivo físico en el storage
            $rutaPublica = $file->storeAs('pdfs', $nombreArchivo, 'public');

            // 6. Guardar el registro en la Base de Datos
            $pdfReg = new PdfUpload();
            $pdfReg->nombre = $nombreArchivo;
            $pdfReg->ruta = $rutaPublica; 
            $pdfReg->save();

            return response()->json([
                'success' => true,
                'filename' => $nombreArchivo
            ]);
        }

            return response()->json(['error' => 'No se recibió ningún archivo'], 400);
    }

    // Cambia o añade estos métodos dentro de tu PdfUploadController

// 1. Muestra la lista de todos los PDFs
public function list()
{
    // Obtenemos todos los archivos, los más recientes primero
    $pdfs = PdfUpload::latest()->get(); 
    
    return view('pdf-list', compact('pdfs'));
}

// 2. Descarga un PDF específico mediante su ID
public function downloadById($id)
{
    $pdf = PdfUpload::findOrFail($id);

    /** @var \Illuminate\Filesystem\FilesystemAdapter $disk */
    $disk = Storage::disk('public');

    // Limpiamos el nombre por si acaso
    $nombreLimpio = str_replace('pdfs/', '', $pdf->ruta);

    if ($disk->exists($nombreLimpio)) {
        return $disk->download($nombreLimpio, $pdf->nombre);
    }

    if ($disk->exists($pdf->ruta)) {
        return $disk->download($pdf->ruta);
    }

    return redirect()->back()->with('error', 'El archivo físico no se encuentra en el servidor.');
}

    /**
     * Display the specified resource.
     */
    public function show(PdfUploadController $pdfUploadController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PdfUploadController $pdfUploadController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PdfUploadController $pdfUploadController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PdfUploadController $pdfUploadController)
    {
        //
    }
}
