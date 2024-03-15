@extends('layout')
@section('content')

<center>
<div style="padding-top: 2%; width: 60%; height: 60%">
  <a href="/gcash/unclaimed"> <button class="btn btn-warning" style="float: left">Back</button></a><br><br>
<form action="{{url('/update/unclaimed/'.$table->id)}}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">ID</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$table->id}}" disabled> 
      <label for="exampleInputEmail1">Amount</label>
      <input name="amount" type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$table->amount}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Number</label>
      <input name="number" type="number" name="number" class="form-control" id="exampleInputPassword1" value="{{$table->number}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Reference</label>
        <input name="reference" type="number" name="reference" class="form-control" id="exampleInputPassword1" value="{{$table->reference}}">
      </div>
      <div class="form-group">
        <label for="reference">Claimed</label>
        <select name="claimed" class="form-control" id="">
          <option value="{{$table->claimed}}">{{$table->claimed}}</option>
          @if ($table->claimed == "Yes")
          <option value="No">No</option>
          @else
          <option value="Yes">Yes</option>
          @endif
          
          
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Interest</label>
        <input name="interest" type="number"  class="form-control" id="exampleInputPassword1" value="{{$table->interest}}">
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
