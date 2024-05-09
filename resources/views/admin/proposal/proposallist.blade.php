@extends('admin.layouts.master')

@section('content')




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Order_id</th>
      <th scope="col">Order_item_id</th>
      <th scope="col">Description</th>
      <th scope="col">User_id</th>
      <th scope="col">Cost</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

    @forelse ($proposal as $proposalList)

    <tr>
      <th scope="row">1</th>
      <td>{{ $proposalList->order_id }}</td>
      <td>{{ $proposalList->order_item_id }}</td>
      <td>{{ $proposalList->description }}</td>
      <td>{{ $proposalList->user_id }}</td>
      <td>{{ $proposalList->cost }}</td>
      <td>{{ $proposalList->status }}</td>
      
    </tr>
   
   
  </tbody>
</table>
@endsection
