@extends('layouts.admin')
@section('content')
<section class="create">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between my-4">
                    <h1>Add a comic</h1>
                    <a href="{{route('comics.index')}}"><button class="btn btn-dark my-3">See all comics</button></a>
                </div>
                <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-wrap p-4 bg-dark text-white rounded-3">
                    @csrf
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="comic-title" class="form-label">Title</label>
                            <input type="text" name="comic-title" id="comic-title" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="comic-description" class="form-label">Description</label>
                            <textarea class="form-control" name="comic-description" id="comic-description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="comic-img" class="form-label">Image</label>
                            <input type="text" name="comic-img" id="comic-img" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="mb-3">
                            <label for="comic-price" class="form-label">Price</label>
                            <input type="text" name="comic-price" id="comic-price" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>

                    </div>
                    <div class="w-50 p-5 d-flex flex-column align-items-centers">
                        <div class="mb-3">
                            <label for="comic-series" class="form-label">Series</label>
                            <input type="text" name="comic-series" id="comic-series" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                        <input type="date" name="comic-sale-date" id="comic-sale-date" class="mb-3 rounded-2 p-1">
                        <div class="mb-3">
                            <label for="comic-type" class="form-label">Type</label>
                            <input type="text" name="comic-type" id="comic-type" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection