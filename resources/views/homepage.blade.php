@extends('Layout.main')


@section('content')
<div class="header" style="background-image: url('{{ asset('assets/images/1.jpg') }}')" id="Header_section">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-6 text-center text-white">
            <h1 class="mb-4" id="Header_title">Your Laundry Partner In Crime</h1>
            <h2 class="text-primary mb-4">{{ env('APP_NAME') }}</h2>
            <p class="mb-5" id="Header_subTitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius, pariatur.</p>
            <button class="btn btn-primary btn-lg" onclick="smoothScroll('#Steps_section')">Get Started</button>
        </div>
    </div>
</div>
<div class="parallax mask align-items-center d-grid vh-100" style="background-image: url('{{ asset('assets/images/2.jpg') }}')" id="Steps_section">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center text-white">
            <h2 class="reveal rev-bottom mb-4" id="Steps_title">Never do Laundry Again, you have better things to do!</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary" id="Steps_one_title">Step 1</h2>
            <p id="Steps_one_desc">Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary" style="transition-delay: 0.2s" id="Steps_two_title">Step 2</h2>
            <p id="Steps_two_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
        </div>
        <div class="col-md-3 text-center text-white">
            <h2 class="reveal rev-bottom mb-4 text-primary" style="transition-delay: 0.4s" id="Steps_three_title">Step 3</h2>
            <p id="Steps_three_desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
        </div>
    </div>
    <div class="row justify-content-center center">
        <div class="col-md-9 text-center text-white">
            <h2 class="mb-4" id="Steps_subTitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
            <a href="{{ env('APP_BOOKINGS_URL') }}" class="btn btn-primary btn-lg">Register Now</a>
        </div>
    </div>
</div>
<div class="sectionBanner row justify-content-center align-items-center py-5" id="Greetings_section">
    <div class="col-md-5 text-end">
        <img src="{{ asset('assets/images/Suit5.jpg') }}" class="reveal rev-left img-fluid" alt="{{ env('APP_NAME') }}" id="Greetings_picture">
    </div>
    <div class="col-md-5 ">
        <h2 class="reveal rev-right mb-4" id="Greetings_title">Proudly Present To You</h2>
        <p id="Greetings_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsum, dolorem animi incidunt modi, illo excepturi doloremque, quis illum nulla aliquid molestiae. Natus praesentium, incidunt temporibus minus accusamus at corrupti illo voluptatum veniam quidem? Velit aut, laboriosam laudantium ducimus cumque doloribus excepturi! Accusamus, minima temporibus?</p>
        <button class="btn btn-outline-light btn-lg" onclick="smoothScroll('#Steps_section')">Learn More how to order</button>
    </div>
</div>
<div class="parallax mask d-grid align-items-center vh-75" style="background-image: url('{{ asset('assets/images/Gown3.jpg') }}')" id="Highlight_section">
    <div class="row justify-content-center ">
        <div class="col-md-10 text-center text-white">
            <h2 class="reveal rev-bottom mb-4" id="Highlight_title">Wedding Gown, Cleaning and Finishing</h2>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-md-5 text-center text-white ">
            <h3 class="reveal rev-left mb-4 text-primary" id="Highlight_one_title">Pre-Wedding</h3>
            <p id="Highlight_one_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iusto ipsum sit consequuntur ab porro!</p>
        </div>
        <div class="col-md-5 text-center text-white ">
            <h3 class="reveal rev-right mb-4 text-primary" id="Highlight_two_title">Post-Wedding</h3>
            <p id="Highlight_two_desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, quis?</p>
        </div>
    </div>
    <div class="row justify-content-center center ">
        <div class="col-md-10 text-center text-white ">
            <h2 class="mb-4" id="Highlight_subTitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
            <button class="btn btn-primary btn-lg">Register Now</button>
        </div>
    </div>
</div>
<div class="section d-grid align-items-center py-5 min-vh-100">
    <div class="row justify-content-center ">
        @php
            $transition = 0;
        @endphp
        @foreach ($services as $idx => $item)
            @if ($idx < 3)
                <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: {{ $transition }}s">
                    <img src="{{ $item['picture'] }}" alt="{{ $item['service_name'] }}-image" class="img-fluid rounded-circle shadow-sm w-50 mb-2">
                    <h3 class="text-primary">{{ $item['service_name'] }}</h3>
                    <p class="text-secondary">{!! Str::limit($item['description'], 200) !!}</p>
                    <button type="button" class="btn btn-link text-secondary">Click here </button>
                </div>
            @php
                $transition = $transition + 0.3;
            @endphp
            @endif
        @endforeach
    </div>
    <div class="row justify-content-center ">
        @php
            $transition = 0;
        @endphp
        @foreach ($services as $idx => $item)
            @if ($idx > 2)
                <div class="col-md-3 text-center reveal rev-bottom"  style="transition-delay: {{ $transition }}s">
                    <img src="{{ $item['picture'] ?? '#' }}" alt="{{ $item['service_name'] }}" class="img-fluid rounded-circle shadow-sm w-50 mb-2">
                    <h3 class="text-primary">{{ $item['service_name'] }}</h3>
                    <p class="text-secondary">{!! Str::limit($item['description'], 200) !!}</p>
                    <button type="button" class="btn btn-link text-secondary">Click here </button>
                </div>
            @php
                $transition = $transition + 0.3;
            @endphp
            @endif
        @endforeach
    </div>
</div>
@endsection

@section('page-script')
    <script>
        function getData() {
            var link = `${baseUrl}/api/v2/landing-page`;
            fetch(link,{
                method:'get'
                })
                .then(res=>res.json())
                .then(data=>{
                    document.getElementById('Header_section').style.backgroundImage = `url(${data['Header_background']})`;
                    document.getElementById('Header_title').innerHTML = data['Header_title'];
                    document.getElementById('Header_subTitle').innerHTML = data['Header_subTitle'];
                    
                    document.getElementById('Steps_section').style.backgroundImage = `url(${data['Steps_background']})`;
                    document.getElementById('Steps_title').innerHTML = data['Steps_title'];
                    document.getElementById('Steps_subTitle').innerHTML = data['Steps_subTitle'];
                    document.getElementById('Steps_one_title').innerHTML = data['Steps_one_title'];
                    document.getElementById('Steps_one_desc').innerHTML = data['Steps_one_desc'];
                    document.getElementById('Steps_two_title').innerHTML = data['Steps_two_title'];
                    document.getElementById('Steps_two_desc').innerHTML = data['Steps_two_desc'];
                    document.getElementById('Steps_three_title').innerHTML = data['Steps_three_title'];
                    document.getElementById('Steps_three_desc').innerHTML = data['Steps_three_desc'];
                    
                    document.getElementById('Greetings_picture').src = data['Greetings_picture'];
                    document.getElementById('Greetings_title').innerHTML = data['Greetings_title'];
                    document.getElementById('Greetings_desc').innerHTML = data['Greetings_desc'];
                    
                    document.getElementById('Highlight_section').style.backgroundImage = `url(${data['Highlight_background']})`;
                    document.getElementById('Highlight_title').innerHTML = data['Highlight_title'];
                    document.getElementById('Highlight_subTitle').innerHTML = data['Highlight_subTitle'];
                    document.getElementById('Highlight_one_title').innerHTML = data['Highlight_one_title'];
                    document.getElementById('Highlight_one_desc').innerHTML = data['Highlight_one_desc'];
                    document.getElementById('Highlight_two_title').innerHTML = data['Highlight_two_title'];
                    document.getElementById('Highlight_two_desc').innerHTML = data['Highlight_two_desc'];

                    setTimeout(() => {
                        document.querySelector(".loader").classList.remove("loader-active");
                        document.querySelector(".section").style.display = "block";
                    }, 1000);
                })
                .catch(err=>console.log(err))
            }
    </script>
@endsection