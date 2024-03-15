@extends('layout')

@section('content')
  <center>
    <div style="padding-top: 2%; width: 60%; height: 60%">
     <a href="/"> <button class="btn btn-warning" style="float: left">Back</button></a><br><br>
      <form action="{{ route('gcash.create') }}" method="POST" style="text-align: center">
        @csrf
        <div class="form-group">
          <label for="amount">Amount</label>
          <input name="amount" type="number" class="form-control" id="amount" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="number">Number</label>
          <input name="number" type="number" class="form-control" id="number">
        </div>
        <div class="form-group">
          <label for="reference">Reference</label>
          <input name="reference" type="number" class="form-control" id="reference">
        </div>
        <div class="form-group">
          <label for="reference">Claimed</label>
          <select name="claimed" class="form-control" id="">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="reference">Interest</label>
          <input name="interest" type="number" class="form-control" id="reference">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </center>

  <style>
    input {
      text-align: center;
    }
  </style>
@endsection