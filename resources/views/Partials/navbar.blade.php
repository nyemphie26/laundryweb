<nav id="navbar" class="navbar navbar-expand-lg fixed-top" style="transition: 0.4s">
    <div id="navContainer" class="container-fluid mt-5 justify-content-center" style="transition: 0.4s">
      <div class="d-flex column-gap-5">
        <a class="navbar-brand" href="/"><h2 class="txt-brand text-primary" style="transition: 0.4s">{{ env('APP_NAME') }}</h2></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll column-gap-3" style="--bs-scroll-height: 50vh;">
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white active" aria-current="page" href="/service/organic-dry-cleaning">Organic Dry Cleaning</a>
            </li>
            <li class="nav-item dropdown">
              <a id="nav-link" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu text-white">
                @foreach ($categories as $category)
                  @if ($category->variants->isNotEmpty())
                  <li><a class="dropdown-item" href="/service/{{ $category->slug }}">{{ $category->name }}</a></li>
                  @endif
                @endforeach
                {{-- <li><a class="dropdown-item" href="/service/wash,-dry,-and-fold">Wash, Dry, and Fold</a></li>
                <li><a class="dropdown-item" href="/service/bed-and-linen">Bed and Linen</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/service/ironing">Ironing</a></li> --}}
              </ul>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white">Pricing</a>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a id="nav-link" class="nav-link text-white" href="/contact">Contact Us</a>
            </li>
          </ul>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </nav>