@extends('layout')

@section('content')
  <center>
    <div style="padding-top: 5%; width: 60%; height: 60%">
      <form action="{{ route('gcash.create') }}" method="POST">
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