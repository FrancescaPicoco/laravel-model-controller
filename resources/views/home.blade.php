@extends('layouts.app')

@section('content')
<h1 class="text-center">Films:</h1>
<div class="cardContainer d-flex flex-wrap container-sm m-auto">
    @foreach ($movies as $film)
    <div class="card">
        <img src="{{$film->img}}" class="card-img-top">
        <h3>{{$film->name}}</h3>
        <div class="card-body">
          <p class="card-text">{{$film->description}}</p>
        </div>
    </div>
    @endforeach
</div>   
@endsection