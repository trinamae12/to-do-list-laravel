<!doctype html>
<html lang="en">  
  <head>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    @include('inc.navbar') 
    @yield('content')   
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>