<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoices()
    {
        $invoices= Invoice::all(); 
        return view('admin.invoice.invoicelist',compact('invoices'));
    }
}
