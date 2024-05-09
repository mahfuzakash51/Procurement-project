@extends('admin.layouts.master')

@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order_id</th>
      <th scope="col">Total_cost</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
      <th scope="col">Payment_status</th>
    </tr>
  </thead>
  <tbody>

    @forelse ( $invoices as $invoiceList )

    <tr>
      <th scope="row">1</th>
      <td>{{ $invoiceList->oder_id }}</td>
      <td>{{ $invoiceList->total_cost }}</td>
      <td>{{ $invoiceList->status }}</td>
      <td>{{ $invoiceList->details }}</td>
      <td>{{ $invoiceList->payment_status }}</td>
      
    </tr>
    
        
    @empty
     <tr>

      <td class="text-center" colspan="6">No data found</td>
    </tr>   
    @endforelse
  
   
  </tbody>
</table>

@endsection
