@extends('admin.layouts.master')

@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($ordersDetails as $ordersDetail)
    <tr>
      <th scope="row">1</th>
      <td>{{$ordersDetail->name}}</td>
      <td>{{$ordersDetail->description}}</td>
      <td>{{$ordersDetail->quantity}}</td>
      <td>{{$ordersDetail->action}}</td>
    </tr>
   
   
  </tbody>
</table>
@endsection
