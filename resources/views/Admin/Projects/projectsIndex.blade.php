@extends('layouts/admin')

@section('content')
<div class="container">
    <h1 class="m-4 text-center">Progetti</h1>
    <div class="contaniner row">
        @foreach ($projects as $project)
            <div class="card p-5 col-md-6  col-12 border-0">
                <img class="card-img-top" src="{{$project->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$project->year}}</h6>
                    <p class="card-text">{{$project->description}}</p>
                </div>
              </div>
        @endforeach
    </div>
</div>
@endsection