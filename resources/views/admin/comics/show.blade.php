@extends('layouts.admin')

@section('content')
<section class="show">
    <div class="container py-5 min-vh-100">
        <a href="{{route('comics.index')}}"><button class="btn btn-dark d-block ms-auto">See All Comics </button></a>
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <img class="ms_img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col-8 bg-white">
                <div class="details p-4">
                    <h4 class="">{{$comic->title}}</h4>
                    <p class=" py-2">{{$comic->description}}</p>
                    <div><span class="fw-bold">Price:</span> {{$comic->price}} $</div>
                    <div class="my-2 series-date-type">
                        <span><span class="fw-bold">Series:</span> {{$comic->series}}</span>
                        <span><span class="fw-bold">Sale Date:</span> {{$comic->sale_date}}</span>
                        <span><span class="fw-bold">Type:</span> {{$comic->type}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection