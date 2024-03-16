<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery-3.7.1.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="text-align: center">
      <a class="navbar-brand" href="#">Gcash</a>
      <a href="/gcash/creates" style="padding: 1%">
        <button class="btn btn-dark" style=""> + Create new record</button>
      </a>
    <a href="/gcash/unclaimed" style="padding-right: 1%"><button class="btn btn-dark"  >View Unclaimed</button></a>
    <a href="/all"><button class="btn btn-dark">View All</button></a>
    <a href="/"><button class="btn btn-dark" style="margin-left: 10%">View Today</button></a>
      <form class="form-inline my-2 my-lg-0" style="margin-left: auto;" method="POST" action="/gcash/search">
        @csrf
        @method('POST')
        <div class="input-group-prepend">
        <input class="mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </div>
      </form>
    </nav>
    <title>Gcash</title>
    
</head>
<body>
    
    @yield('content')
</body>
</html>