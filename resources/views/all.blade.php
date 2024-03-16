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

<div style="padding-top:2%; margin-left: auto;margin-right: auto; overflow-y: scroll; height: 600px">
  <div style="margin-left: 40%" class="row">
    {{  $gcash->links()}} 
    
    <div class="card" style="margin-left: 20%">  
      <div class="card-body">
        <form action="{{route('gcash.date')}}" method="GET">
          @csrf
          @method('GET')
          <input type="date" name="datesss" id="meeting-time">
            <button class="btn btn-outline-primary" type="submit">Enter</button>
          </form>
          <h5>Total to this date: {{$sum}}</h5>
      </div>  
    </div>
  </div>
   
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Amount</th>
        <th scope="col">Number</th>
        <th scope="col">Reference</th>
        <th scope="col">Date</th>
        <th scope="col">Claimed</th>
        <th scope="col">Interest</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody> 
      @php
      $total = 0; // Initialize the total variable
  @endphp
  @if (!is_null($gcash) && count($gcash) > 0) <!-- Check if $gcash is not null and contains data -->
      @foreach ($gcash as $item)
          <!-- display data -->
          <tr>
              <th scope="row">{{$item['id']}}</th>
              <td>{{$item->amount}}</td>
              <td>{{$item->number}}</td>
              <td>{{$item->reference}}</td>
              <td>{{$item->created_at}}</td>
              <td>{{$item->claimed}}</td>
              <td>{{$item->interest}}</td>
              <td><a href="/gcash/edit/{{$item->id}}"><button class="btn btn-success">Edit</button></a></td>
              <td><a id="del" onclick="dels(this, {{$item->id}})" href=""><button class="btn btn-danger">Delete</button></a></td>
          </tr>

      @endforeach
     
     
     
  @else
      <h3>No transaction</h3>
  @endif
  </tbody>
  </table>
</div>

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
