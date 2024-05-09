<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// public page




// admin page
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/orderlist', [OrderController::class, 'orderslist'])->name('orderlist');
    Route::post('/create-order', [OrderController::class, 'createOrder'])->name('create-order-submit');
    Route::get('/orders/details', [OrderController::class, 'details'])->name('orders.details');

    Route::get('/invoicelist', [InvoiceController::class, 'invoices' ])->name('invoicelist');

    Route::get('/proposallist', [ProposalController::class, 'proposals' ])->name('proposallist');

    Route::get('/reportlist', [ReportController::class, 'reports' ])->name('reportlist');
});