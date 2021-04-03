<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Infotech Shop</a>
      <div class="float-right">
          <a href="{{route('auth.index')}}">Login/Register</a>
      </div>
    </div>
  </nav>
  @yield('content')
</body>
</html>