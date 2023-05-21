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
            <h5 class="py-2 w-25">Anno</h5>
            <p class="py-2 w-75">{{$project->year}}</p>
        </div>

        <div class="description w-100 d-flex">
            <h5 class="py-2 w-25">Descrizione</h5>
            <p class="py-2 w-75">{{$project->description}}</p>
        </div>

        <div class="description w-100 d-flex">
            <h5 class="py-2 w-25">slug</h5>
            <p class="py-2 w-75">{{$project->slug}}</p>
        </div>

    </div>

    <div class="btn-wrapper col-12 m-4 d-flex flex-column justify-content-center align-items-center">

        <div class="edit-btn-wrapper  m-2">
            <a href="">Modifica</a>    
            <a href="">Elimina</a>    
        </div>

        <a href="{{route('admin.projects.index')}}" class="btn btn-primary px-4 py-2">Altri Progetti</a>
    </div>

</div>


@endsection