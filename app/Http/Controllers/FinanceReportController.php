<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;
use League\Csv\Writer;

class FinanceReportController extends Controller
{
    public function exportCsv()
    {
        $csv = Writer::createFromFileObject(new \SplTempFileObject());

        $csv->insertOne(['Tanggal Keuangan', 'Jenis Keuangan', 'Jumlah Pemasukan', 'Jumlah Pengeluaran', 'Deskripsi Keuangan']);

        $reports = Finance::all();
        foreach ($reports as $report) {
            $totalMasuk = $report->finance_type === 'masuk' ? $report->masuk : 0;
            $totalKeluar = $report->finance_type === 'keluar' ? $report->keluar : 0;

            $csv->insertOne([
                $report->tanggal,
                $report->finance_type,
                $totalMasuk,
                $totalKeluar,
                $report->description,
            ]);
        }

        return response((string) $csv, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="finances_report.csv"',
        ]);
    }
}
