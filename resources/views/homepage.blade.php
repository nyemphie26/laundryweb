@extends('Layout.main')


@section('content')
<div class="header" style="background-image: url('{{ asset('assets/images/1.jpg') }}')">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6 text-center text-white">
            <h1 class="mb-5">Your Laundry Partner In Crime</h1>
            <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, pariatur.</p>
            <button class="btn btn-success btn-lg">Get Started</button>
        </div>
    </div>
</div>
<div class="sectionBanner row justify-content-center align-items-center" style="height:25vh">
    <div class="col-md-9 text-center text-white">
        <h2 class="mb-4">Hand made face masks available</h2>
        <button class="btn btn-secondary btn-lg">Face Mask</button>
    </div>
</div>
    <div class="parallax d-grid align-items-center py-5 gap-1" style="background-image: url('{{ asset('assets/images/2.jpg') }}')">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center text-white">
                <h2 class="mb-4">Never do Laundry Again, you have better things to do!</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 text-center text-white">
                <h3 class="mb-4">Step 1</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-3 text-center text-white">
                <h3 class="mb-4">Step 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
            </div>
            <div class="col-md-3 text-center text-white">
                <h3 class="mb-4">Step 3</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
            </div>
        </div>
        <div class="row justify-content-center center">
            <div class="col-md-9 text-center text-white">
                <h2 class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                <button class="btn btn-secondary btn-lg">Register Now</button>
            </div>
        </div>
    </div>
<div class="sectionBanner row justify-content-center align-items-center">
    <div class="col-5 border text-end">sdfsd</div>
    <div class="col-5 border">
        <h2 class="mb-4">Proudly Present To You</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsum, dolorem animi incidunt modi, illo excepturi doloremque, quis illum nulla aliquid molestiae. Natus praesentium, incidunt temporibus minus accusamus at corrupti illo voluptatum veniam quidem? Velit aut, laboriosam laudantium ducimus cumque doloribus excepturi! Accusamus, minima temporibus?</p>
        <button class="btn btn-outline-light btn-lg">Learn More how to order</button>
    </div>
</div>
    <div class="parallax d-grid align-items-center py-5 gap-1 border" style="background-image: url('{{ asset('assets/images/3.jpg') }}')">
        <div class="row justify-content-center border">
            <div class="col-md-10 text-center text-white border">
                <h2 class="mb-4">Wedding Gown, Cleaning and Finishing</h2>
            </div>
        </div>
        <div class="row justify-content-center border">
            <div class="col-md-5 text-center text-white border">
                <h3 class="mb-4">Pre-Wedding</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
            </div>
            <div class="col-md-5 text-center text-white border">
                <h3 class="mb-4">Post-Wedding</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
            </div>
        </div>
        <div class="row justify-content-center center border">
            <div class="col-md-10 text-center text-white border">
                <h2 class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                <button class="btn btn-secondary btn-lg">Register Now</button>
            </div>
        </div>
    </div>
<div class="section d-grid align-items-center">
    <div class="row justify-content-center border">
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 1</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 2</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 3</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
    </div>
    <div class="row justify-content-center border">
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 4</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 5</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
        <div class="col-3 text-center border">
            <h1 class="text-success">Icon</h1>
            <h3 class="text-secondary">Service 6</h3>
            <p class="text-secondary">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, nostrum.</p>
            <button type="button" class="btn btn-link text-secondary">Click here </button>
        </div>
    </div>
</div>
@endsection