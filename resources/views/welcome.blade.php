@extends('layouts.app')

@section('main-content')
<main id="site_main" class="bg_dark-gray pb-4 text-white">
    <div class="container h-100 d-flex align-items-center">
        <a href="{{route('comics.index')}}" class="btn btn-danger d-block">Admin Panel</a>
        <h1 class="py-3">Content goes here --></h1>
    </div>

</main>
@endsection