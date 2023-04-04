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

      <div class="section footer d-grid bg-dark align-items-center" style="height: 20vh">
        <div class="d-flex justify-content-center text-center column-gap-3">
            <a href="#">
                <div class="social-box bg-primary">
                    <i class="fa-brands fa-facebook-f" style="color: white"></i>
                </div>
            </a>
            <a href="#">
                <div class="social-box bg-primary">
                    <i class="fa-brands fa-twitter" style="color: white"></i>
                </div>
            </a>
            <a href="#">
                <div class="social-box bg-primary">
                    <i class="fa-brands fa-instagram" style="color: white"></i>
                </div>
            </a>
        </div>
        <div class="d-flex justify-content-center text-center column-gap-3 m-0">
          <a href="/privacy-policy">
            <span class="text-xs">Privacy Policy</span>
          </a>
          {{-- <a href="/term-condition">
            <span class="text-xs">Term and Condition</span>
          </a> --}}
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/smoothScroll.js') }}"></script>
    <script>
        var baseUrl = "{{ env('APP_SERVER_API') }}";
      
        window.onscroll = function() {scrollFunction()};
        window.addEventListener('scroll', reveal);
        window.addEventListener('load', function() {
          loadServices();
          getData();
        });
        
        function loadServices() {
          var link = `${baseUrl}/api/v1/categories`;
            fetch(link,{
                method:'get'
                })
                .then(res=>res.json())
                .then(data=>{
                    const list = document.getElementById('categoriesList');
                    data['data'].forEach(item => {
                      const li = document.createElement('li');
                      const a = document.createElement('a');
                      a.href = '/service/'+item['slug'];
                      a.classList = 'dropdown-item';
                      a.textContent = item['category'];
                      li.appendChild(a);
                      list.appendChild(li);
                    });
                })
                .catch(err=>console.log(err))
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
      @yield('page-script')
  </body>
</html>