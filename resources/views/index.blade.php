@extends('layout')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<a href="/gcash/creates"><button class="btn btn-primary">Create new record</button><br></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Number</th>
        <th scope="col">Reference</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody> 
@unless (count($gcash)==0)
@foreach ($gcash as $item)

    <tr>
      <th scope="row">{{$item['id']}}</th>
      <td>{{$item->amount}}</td>
      <td> {{$item->number}}</td>
      <td> {{$item->reference}} </td>
      <td>{{$item->created_at}}</td>
      <td><a href="/gcash/edit/{{$item->id}}"><button class="btn btn-success" >Edit</button> </a><a id="del" onclick="dels(this, {{$item->id}})" href=""><button class="btn btn-danger">Delete</button></a>
    </tr>

@endforeach

@else
<h3>No transaction</h3>
@endunless
</tbody>
</table>

@endsection
<script>
  function dels(link, ips) {
      if (window.confirm('Do you want to delete this?')) {
          link.href = "/gcash/delete/" + ips;
      } else {
          // User cancelled the delete action
      }
  }
  </script>