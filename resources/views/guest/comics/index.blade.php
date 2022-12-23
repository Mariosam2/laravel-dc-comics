@extends('layouts.app')
@section('main-content')
<main id="site_main" class="bg_dark-gray text-white">
    <section class="comics">
        <div class="container">
            <span class="text-uppercase fw-semibold text-white bg-primary px-3 py-2 jumbo-tag fs-5">current series</span>
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6 gx-4 py-5">
                @foreach($comics as $key=>$comic)
                <div class="col comic">
                    <img src="{{$comic->thumb}}" alt="">
                    <div class="caption py-2">
                        <a href="{{route('guest-comic', $comic->id)}}"><span class="text-uppercase">{{$comic->series}}</span></a>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary text-uppercase text-white my-4 rounded-0 fw-semibold px-3 w-25 py-2">load more</button>
            </div>
        </div>
    </section>
    <section class="buy-more bg-primary">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
                <div class="col buy-item">
                    <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="digital comics">
                    <span class="text-uppercase text-white">digital comics</span>
                </div>
                <div class="col buy-item">
                    <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="merchandise">
                    <span class="text-uppercase text-white">dc merchandise</span>
                </div>
                <div class="col buy-item">
                    <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="subscriptions">
                    <span class="text-uppercase text-white">subscription</span>
                </div>
                <div class="col buy-item">
                    <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="shop-locator">
                    <span class="text-uppercase text-white">shop-locator</span>
                </div>
                <div class="col buy-item">
                    <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="subscriptions">
                    <span class="text-uppercase text-white">dc power visa</span>
                </div>

            </div>
        </div>
    </section>

</main>
@endsection