@extends('layouts.admin')
@section('content')
<section class="edit">
    <div class="container py-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between align-items-center my-4">
                    <h1>Edit a comic</h1>
                    <a href="{{route('comics.index')}}"><button class="btn btn-dark my-3">Back to comics</button></a>
                </div>
                <form action="{{route('comics.update', $comic->id)}}" method="POST" class="d-flex flex-wrap p-4 bg-dark text-white rounded-3">
                    @csrf
                    @method('PUT')
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('title', $comic->title)}}">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{old('description', $comic->description)}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('thumb', $comic->thumb)}}">

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('price', $comic->price)}}">

                        </div>

                    </div>
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('series', $comic->series)}}">

                        </div>
                        <input type="date" name="sale_date" id="sale_date" class="mb-3 rounded-2 p-1 @error('date') is-invalid @enderror" value="{{$comic->sale_date}}">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="" aria-describedby="helpId" value="{{old('type', $comic->type)}}">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection