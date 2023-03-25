@extends('Layout.main')

@section('content')
<div class="header row pt-5" style="height:75vh; background-image: url('{{ asset($titleImg) }}')" id="pageBackground">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-9 text-center text-white">
            <h1 class="mb-5" id="pageTitle">@yield('pageTitle')</h1>
        </div>
    </div>
</div>
<div class="parallax min-vh-75 container-mask"  style="background-image: url('{{ asset('assets/images/2.jpg') }}')">
    <div class="container col-lg-9 px-0 py-5">
        @yield('subcontent')
    </div>
</div>
@endsection