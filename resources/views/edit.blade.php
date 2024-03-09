@extends('layout')
@section('content')

<center>
<div style="padding-top: 5%; width: 60%; height: 60%">
<form action="" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$table->id}}" disabled> 
      <label for="exampleInputEmail1">Amount</label>
      <input name="amount" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$table->amount}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Number</label>
      <input name="number" type="number" class="form-control" id="exampleInputPassword1" value="{{$table->number}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Reference</label>
        <input name="reference" type="number" class="form-control" id="exampleInputPassword1" value="{{$table->reference}}">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</center>
<style>
    input
    {
      text-align: center;
    }
    
    </style>
@endsection
