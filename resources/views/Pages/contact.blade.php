@extends('Pages.page')

@section('pageTitle')
    Our store teams are here to help!
@endsection

@section('subcontent')
<div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary">Find Us</h2>
    </div>
</div>
<div class="row justify-content-center py-5">
    <div class="col-lg text-center">
        <h3 class="fs-3 text-primary">Store Location</h3>
        <h3 class="fs-4">12 Aughtie Dr, Albert Park VIC 3206, Australia</h3>
        <h4>000-123425</h4>
        <br>
        <h1>
            <i class="fa-regular fa-clock text-primary"></i>
        </h1>
        <h3 class="fs-3 text-primary">Opening Hours</h3>
        <h3 class="fs-4">Monday - Friday 8:30 AM to 4:00 PM</h3>
        <h3 class="fs-4">Saturday - Sunday 7:30 AM to 2:00 PM</h3>
    </div>
    <div class="col-lg">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=melbourne circuit&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://pdflist.com/" alt="pdflist.com">Pdflist.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div>
</div>
@endsection