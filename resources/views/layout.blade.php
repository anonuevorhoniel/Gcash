<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="text-align: center">
      <a class="navbar-brand" href="#">Gcash</a>
      <form class="form-inline my-2 my-lg-0" style="margin-left: auto;" method="POST" action="/gcash/search">
        @csrf
        @method('POST')
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
    <title>Gcash</title>
    
</head>
<body>
    
    @yield('content')
</body>
</html>