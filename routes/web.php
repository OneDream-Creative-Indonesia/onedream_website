<?php

use App\Http\Controllers\FinanceReportController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\toolLendingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\Contact;
use App\Http\Controllers\service;
use App\Http\Controllers\ServiceDetail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [Home::class, "index"]);
Route::get('/about', [About::class, 'index']);
Route::get('/portfolio', [Portfolio::class, 'index']);
Route::get('/service', [service::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);
Route::post('/contact', [Contact::class, 'sendEmail'])->name('contact.send');
Route::get('/service/video', [ServiceDetail::class, 'video']);
Route::get('/service/foto', [ServiceDetail::class, 'foto']);
Route::get('/service/desain', [ServiceDetail::class, 'desain']);

Route::redirect('/login', '/dashboard')->name('login');

Route::get('/attendances/export', [FinanceReportController::class, 'exportCsv'])->name('finances_reports.export');
Route::get('/dashboard/tool-lendings/{id}/edit', [ToolLendingController::class, 'edit'])->name('toolLending.edit');
Route::get('/invoices/download/{id}', [InvoiceController::class, 'downloadPDF'])->name('invoices.downloadPDF')->middleware('auth');

Route::get('/storage-link',function(){
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder,$linkFolder);
});

Route::middleware(['filament-auth'])->group(function () {
    Route::get('/task', [toolLendingController::class, 'index']);
    Route::post('/task', [ToolLendingController::class, 'store']);
    Route::put('/task/{id}', [ToolLendingController::class, 'update']);
});
