@extends('layouts.app')

@section('content')
<h1>Films:</h1>
<div class="cardContainer d-flex flex-wrap">
    @foreach ($movies as $film)
    <div class="card">
            <h3>{{$film->name}}</h3>
        <img src="{{$film->img}}" class="card-img-top">
        <div class="card-body">
          <p class="card-text">{{$film->description}}</p>
        </div>
    </div>
    @endforeach
</div>
    
@endsection