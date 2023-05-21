@extends('layouts/admin')

@section('content')
<div class="show-container">
    
    <div id="img-container" style="background-image: url('{{$project->thumb}}')">
        <h1 class="text-white">{{$project->title}}</h1>
        <div id="layer"></div>
    </div>


    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">
        <h4 class="card-text">Panoramica</h4>
        
        <div class="description w-100 d-flex">
            <h5 class="py-4 w-25">Anno</h5>
            <p class="py-4 w-75">{{$project->year}}</p>
        </div>

        <div class="description w-100 d-flex">
            <h5 class="py-4 w-25">Descrizione</h5>
            <p class="py-4 w-75">{{$project->description}}</p>
        </div>

        <div class="description w-100 d-flex">
            <h5 class="py-4 w-25">slug</h5>
            <p class="py-4 w-75">{{$project->slug}}</p>
        </div>

    </div>

</div>


@endsection