<nav id="navbar" class="navbar navbar-expand-lg fixed-top" style="transition: 0.4s">
    <div id="navContainer" class="container-fluid mt-5 justify-content-center" style="transition: 0.4s">
      <div class="d-flex column-gap-5">
        <a class="navbar-brand" href="#"><h2 class="txt-brand text-white" style="transition: 0.4s">{{ env('APP_NAME') }}</h2></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll column-gap-3" style="--bs-scroll-height: 50vh;">
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white active" aria-current="page" href="#">Organic Dry Cleaning</a>
            </li>
            <li class="nav-item dropdown">
              <a id="nav-link" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu text-white">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white">Pricing</a>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white">About</a>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white">Contact Us</a>
            </li>
          </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </nav>