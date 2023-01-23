@extends('Layout.main')


@section('content')
<div class="header" style="background-image: url('{{ asset('assets/images/1.jpg') }}')">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6 text-center text-white">
            <h1 class="mb-4">Your Laundry Partner In Crime</h1>
            <h2 class="text-primary mb-4">{{ env('APP_NAME') }}</h2>
            <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, pariatur.</p>
            <button class="btn btn-primary btn-lg">Get Started</button>
        </div>
    </div>
</div>
<div class="parallax mask align-items-center d-grid vh-100" style="background-image: url('{{ asset('assets/images/2.jpg') }}')">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center text-white">
            <h2 class="reveal rev-bottom mb-4">Never do Laundry Again, you have better things to do!</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary">Step 1</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary" style="transition-delay: 0.2s">Step 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
        </div>
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary" style="transition-delay: 0.4s">Step 3</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
        </div>
    </div>
    <div class="row justify-content-center center">
        <div class="col-md-9 text-center text-white">
            <h2 class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
            <button class="btn btn-primary btn-lg">Register Now</button>
        </div>
    </div>
</div>
<div class="sectionBanner row justify-content-center align-items-center py-5">
    <div class="col-md-5 text-end">
        <img src="{{ asset('assets/images/Suit5.jpg') }}" class="reveal rev-left img-fluid" alt="{{ env('APP_NAME') }}">
    </div>
    <div class="col-md-5 ">
        <h2 class="reveal rev-right mb-4">Proudly Present To You</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsum, dolorem animi incidunt modi, illo excepturi doloremque, quis illum nulla aliquid molestiae. Natus praesentium, incidunt temporibus minus accusamus at corrupti illo voluptatum veniam quidem? Velit aut, laboriosam laudantium ducimus cumque doloribus excepturi! Accusamus, minima temporibus?</p>
        <button class="btn btn-outline-light btn-lg">Learn More how to order</button>
    </div>
</div>
<div class="parallax mask d-grid align-items-center vh-75" style="background-image: url('{{ asset('assets/images/3.jpg') }}')">
    <div class="row justify-content-center ">
        <div class="col-md-10 text-center text-white ">
            <h2 class="reveal rev-bottom mb-4">Wedding Gown, Cleaning and Finishing</h2>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md-5 text-center text-white ">
            <h3 class="reveal rev-left mb-4 text-primary">Pre-Wedding</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
        </div>
        <div class="col-md-5 text-center text-white ">
            <h3 class="reveal rev-right mb-4 text-primary">Post-Wedding</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
        </div>
    </div>
    <div class="row justify-content-center center ">
        <div class="col-md-10 text-center text-white ">
            <h2 class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
            <button class="btn btn-primary btn-lg">Register Now</button>
        </div>
    </div>
</div>
<div class="section d-grid align-items-center py-5 min-vh-100">
    <div class="row justify-content-center ">
        <div class="col-md-3 text-center reveal rev-bottom">
            <h1 class="text-primary">Icon</h1>
            <i class="fa-regular fa-washing-machine text-primary"></i>
            <h3 class="text-secondary">Service 1</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: 0.3s">
            <h1 class="text-primary">Icon</h1>
            <h3 class="text-secondary">Service 2</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: 0.6s">
            <h1 class="text-primary">Icon</h1>
            <h3 class="text-secondary">Service 3</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md-3 text-center reveal rev-bottom">
            <h1 class="text-primary">Icon</h1>
            <h3 class="text-secondary">Service 4</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: 0.3s">
            <h1 class="text-primary">Icon</h1>
            <h3 class="text-secondary">Service 5</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: 0.6s">
            <h1 class="text-primary">Icon</h1>
            <h3 class="text-secondary">Service 6</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
    </div>
</div>
@endsection