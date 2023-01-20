<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    {{-- Fonts Family --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Open+Sans&display=swap" rel="stylesheet">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/ea2632d687.js" crossorigin="anonymous"></script>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
  </head>
  <body>
    <div class="loader loader-active "></div>
    <div class="section" style="display: none">
      @include('Partials.navbar')
      @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      const myTimeout = setTimeout(myGreeting, 500);
      
        window.onscroll = function() {scrollFunction()};
        window.addEventListener('scroll', reveal);
        
        
        function myGreeting() {
          document.querySelector(".loader").classList.remove("loader-active");
          document.querySelector(".section").style.display = "block";
        }
        
        
        function scrollFunction() {
          const navLink = document.querySelectorAll('.nav-link');

          if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navContainer").classList.remove("mt-5");
            document.getElementById("navContainer").classList.add("mt-0");
            document.getElementById("navbar").style.backgroundColor = "#f1f1f1";
            document.querySelector(".txt-brand").classList.add("fs-4");
            document.querySelector(".txt-brand").classList.remove("text-primary");
            navLink.forEach((e)=>{e.classList.remove("text-white");});
            
          } else {
            document.getElementById("navContainer").classList.remove("mt-0");
            document.getElementById("navContainer").classList.add("mt-5");
            document.getElementById("nav-link").classList.add("text-white");
            document.querySelector(".txt-brand").classList.remove("fs-4");
            document.querySelector(".txt-brand").classList.add("text-primary");
            document.getElementById("navbar").style.removeProperty("background-color");
            navLink.forEach((element) => {
              element.classList.add('text-white');
            });
          }
        }

        function reveal(){
          var reveals = document.querySelectorAll('.reveal');

          for (let i = 0; i < reveals.length; i++) {
            var winHeight = window.innerHeight;
            var revTop = reveals[i].getBoundingClientRect().top;
            var revPoint = 75;

            if (revTop < winHeight - revPoint) {
              reveals[i].classList.add('active');
            }
            else{
              reveals[i].classList.remove('active');
            }
          }
        }
    </script>
  </body>
</html>