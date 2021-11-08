<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>@yield('title')</title>
   @stack('css')
  </head>
  <body>
    @include('layout._nav')
    @if(session("message"))
    <div class="alert alert-success" role="alert">
      {{session("message")}}
    </div>
    @endif
    @yield('content')
    @include('layout._footer')
    @stack('js')
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
     let logout = document.getElementById('logout')
     if(logout){
       logout.addEventListener('click', ()=>{
         let form = document.getElementById('logout-form')
         form.submit();
       })
     }
    </script>
  </body>
</html>