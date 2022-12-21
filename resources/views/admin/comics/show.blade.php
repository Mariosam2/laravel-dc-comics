@extends('layouts.admin')

@section('content')

<div class="container py-5 min-vh-100">
    <a href="{{route('comics.index')}}"><button class="btn btn-primary">See All Comics </button></a>
    <div class="row justify-content-center">
        <div class="col-12 py-5">
            <div class="card text-black bg-white flex-row">
                <img class="card-img-top ms_img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <div class="card-body details p-4">
                    <h4 class="card-title">{{$comic->title}}</h4>
                    <p class="card-text py-2">{{$comic->description}}</p>
                    <div><span class="fw-bold">Price:</span> {{$comic->price}} $</div>
                    <div class="my-2 series-date-type">
                        <span><span class="fw-bold">Series:</span> {{$comic->series}}</span>
                        <span><span class="fw-bold">Sale_Date:</span> {{$comic->sale_date}}</span>
                        <span><span class="fw-bold">Type:</span> {{$comic->type}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection