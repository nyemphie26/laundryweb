@extends('Pages.page')
@section('pageTitle')
    Kind to your clothes and the planet
@endsection
@section('subcontent')
<div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary fs-1" id="First_row_title">Non-toxic chemical Sydney Dry Cleaner</h2>
        <br>
        <p class="text-start text-secondary" id="First_row_desc">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore minus, maiores eos, illo atque animi beatae perferendis provident quas praesentium modi sunt, at placeat blanditiis! Obcaecati pariatur earum sequi itaque. Voluptate laborum nam expedita necessitatibus tenetur. Expedita voluptate incidunt ex, ipsam unde voluptatum illo laborum qui. Provident, dicta. Possimus a voluptatibus ratione nemo, maxime quaerat illum laboriosam consectetur ad quia nulla quae ducimus quis amet molestias magni id modi eligendi sed velit sunt sint officia.
        </p>
        <br>
    </div>
    <div class="col text-center">
        <img class="reveal rev-right img-fluid" alt="{{ env('APP_NAME') }}" id="First_row_picture">
    </div>
</div>
{{-- <div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary fs-1">Meet Our Teams</h2>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-lg-3">
        <h1>Avatar</h1>
    </div>
    <div class="col-lg-9">
        <h4>The CEO & Founder</h4>
        <p class="text-secondary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum at, fugiat fugit illum sit nesciunt quam excepturi alias inventore repellendus distinctio ipsam dolorem, explicabo unde placeat quaerat numquam nulla sequi culpa! Distinctio suscipit fuga saepe illo. Totam necessitatibus non nisi quod itaque facilis unde inventore.
        </p>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-lg-3">
        <h1>Avatar</h1>
    </div>
    <div class="col-lg-9">
        <h4>The Operational Manager</h4>
        <p class="text-secondary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum at, fugiat fugit illum sit nesciunt quam excepturi alias inventore repellendus distinctio ipsam dolorem, explicabo unde placeat quaerat numquam nulla sequi culpa! Distinctio suscipit fuga saepe illo. Totam necessitatibus non nisi quod itaque facilis unde inventore.
        </p>
    </div>
</div> --}}
@endsection

@section('page-script')
    <script>
        function test() {
            console.log('load');
        }
        function getData() {
            var link = `${baseUrl}/api/v2/about-page`;
            fetch(link,{
                method:'get'
                })
                .then(res=>res.json())
                .then(data=>{
                    document.getElementById('pageBackground').style.backgroundImage = `url(${data['About_background']})`;
                    document.getElementById('pageTitle').innerHTML = data['About_title'];
                    document.getElementById('First_row_title').innerHTML = data['First_row_title'];
                    document.getElementById('First_row_desc').innerHTML = data['First_row_desc'];
                    document.getElementById('First_row_picture').src = data['First_row_picture'];
                
                    setTimeout(() => {
                        document.querySelector(".loader").classList.remove("loader-active");
                        document.querySelector(".section").style.display = "block";
                    }, 1000);
                })
                .catch(err=>console.log(err))
            }
    </script>
@endsection