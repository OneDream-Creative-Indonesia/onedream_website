<?php

namespace App\Http\Controllers;

use App\Models\Ticketing;
use Illuminate\Http\Request;
use League\Csv\Writer;

class TickettingReport extends Controller
{
    public function exportCsv()
    {
        $csv = Writer::createFromFileObject(new \SplTempFileObject());

        $csv->insertOne(['Nama', 'Kelas', 'No Handphone', 'Jenis Pembayaran', 'no_photo']);

        $reports = Ticketing::all();
        foreach ($reports as $report) {
            $noPhoto = $report->no_photo == null ? '-' : $report->no_photo;

            $csv->insertOne([
                $report->nama,
                $report->kelas,
                $report->telpon,
                $report->transaction_type,
                $noPhoto,
            ]);
        }

        return response((string) $csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="finances_report.csv"',
        ]);
    }
}
