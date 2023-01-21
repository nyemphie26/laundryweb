@extends('Pages.page')

@section('pageTitle')
    Here is title message
@endsection

@section('subcontent')
<div class="row justify-content-center py-5">
    <div class="col text-center">
        <h2 class="text-primary fs-1">{{ $title }}</h2>
        <br>
        <p class="text-start text-secondary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore minus, maiores eos, illo atque animi beatae perferendis provident quas praesentium modi sunt, at placeat blanditiis! Obcaecati pariatur earum sequi itaque. Voluptate laborum nam expedita necessitatibus tenetur. Expedita voluptate incidunt ex, ipsam unde voluptatum illo laborum qui. Provident, dicta. Possimus a voluptatibus ratione nemo, maxime quaerat illum laboriosam consectetur ad quia nulla quae ducimus quis amet molestias magni id modi eligendi sed velit sunt sint officia.
        </p>
        <br>
    </div>
    <div class="col text-center my-auto">
        <h1>Picture</h1>
    </div>
</div>
@endsection