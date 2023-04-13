@extends('Pages.page')
@section('pageTitle')
    Affordable pricing with premium services
@endsection
@section('subcontent')
@foreach ($categories as $category)
    <div class="row justify-content-center py-5 mb-4">
        <h2 class="text-primary fs-1 text-center" id="First_row_title">
            {{ $category['category'] }}
        </h2>
        <div class="col text-center p-5" style="background-color: #ccc">
            <div id="pricing-carousel-{{ $category['slug'] }}" class="carousel slide" data-bs-ride="carousel-{{ $category['slug'] }}">
                <div class="carousel-inner">
                    @foreach (array_chunk($category['services'],3) as $chunk)
                        <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                            <div class="d-flex flex-row justify-content-center">
                                @foreach ($chunk as $service)
                                    <div class="card me-2">
                                        <div class="card-header bg-primary">
                                            <h5 class="card-title text-uppercase text-center text-white">{{ $service['service_name'] }}</h5>
                                        </div>
                                        <div class="card-body bg-secondary">
                                            <ul class="fa-ul text-white">
                                                @foreach ($service['variants'] as $item)
                                                    <li>
                                                        <div class="d-flex">
                                                            <span class="fa-li"><i class="fas fa-check"></i></span>
                                                            <h6 class="card-price ms-2 me-2">{{ $item['name'] }}</h6>
                                                            <h6 class="period ms-auto">${{ $item['price'] }}</h6>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                @if (count($category['services'])>3)
                    <button class="carousel-control-prev" type="button" data-bs-target="#pricing-carousel-{{ $category['slug'] }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#pricing-carousel-{{ $category['slug'] }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('page-script')
    <script>
        function getData() {
                setTimeout(() => {
                    document.querySelector(".loader").classList.remove("loader-active");
                    document.querySelector(".section").style.display = "block";
                }, 1000);
            }
    </script>
@endsection