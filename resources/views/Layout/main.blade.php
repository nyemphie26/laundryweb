<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
  </head>
  <body>
    <div class="loader loader-active "></div>
    <div class="section" style="display: none">
      @include('partials.navbar')
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        const myTimeout = setTimeout(myGreeting, 500);
        
        function myGreeting() {
          document.querySelector(".loader").classList.remove("loader-active");
          document.querySelector(".section").style.display = "block";
        }
    </script>
  </body>
</html>