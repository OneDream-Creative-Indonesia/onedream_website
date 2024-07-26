<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function downloadPDF($id)
    {
        $path = public_path('img/bg/bg-invoice.jpg');
        if (!file_exists($path)) {
            // Handle error jika file tidak ditemukan
            abort(404);
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $imageData = base64_encode(file_get_contents($path));
        $imageDataUri = 'data:image/' . $extension . ';base64,' . $imageData;

        $invoice = Invoice::findOrFail($id);
        $pdf = Pdf::loadView('invoices.invoice', compact('invoice', 'imageDataUri'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('invoice_'.$invoice->invoice_number.'.pdf');
    }

}
