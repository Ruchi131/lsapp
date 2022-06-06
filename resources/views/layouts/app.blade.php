<!doctype html>
<html lang={{ config('app.locale') }}>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{config('app.name','default Lsapp')}}</title>
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @yield('content')
    </div>

  </body>
</html>