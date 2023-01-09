@extends('layouts.admin')
@section('content')
<section class="create">
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
                    <h1>Add a comic</h1>
                    <a href="{{route('comics.index')}}"><button class="btn btn-dark my-3">Back to comics</button></a>
                </div>
                <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-wrap p-4 bg-dark text-white rounded-3">
                    @csrf
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{old('title')}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="text" value="{{old('thumb')}}" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" value="{{old('price')}}" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="" aria-describedby="helpId">

                        </div>

                    </div>
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" value="{{old('series')}}" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="" aria-describedby="helpId">

                        </div>
                        <input type="date" value="{{old('sale_date')}}" name="sale_date" id="sale_date" class="mb-3 rounded-2 p-1 @error('date') is-invalid @enderror">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" value="{{old('type')}}" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="" aria-describedby="helpId">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Add</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection