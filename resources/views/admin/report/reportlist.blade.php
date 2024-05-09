@extends('admin.layouts.master')

@section('content')




<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Order_id</th>
      <th>Invoice_id</th>
      <th>Status</th>
      <th>Total Cost</th>
      
    </tr>
  </thead>
  <tbody>

    @forelse ( $report as $reportList )

    <tr>
      <th scope="row">1</th>
      <td>{{ $reportList->order_id }}</td>
      <td>{{ $reportList->invoice_id }}</td>
      <td>{{ $reportList->status }}</td>
      <td>{{ $reportList->total cost }}</td>
      
      
    </tr>
   
   
  </tbody>
</table>
@endsection
