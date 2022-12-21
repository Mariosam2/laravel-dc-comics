@extends('layouts.admin')
@section('content')
<section class="create">
    <div class="container min-vh-100">

        <div class="row">
            <div class="col-12 col-md-8">
                <a href="{{route('comics.index')}}"><button class="btn btn-primary my-4">See All Comics </button></a>
                <h1>Add a comic</h1>
                <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-wrap py-4">
                    @csrf
                    <div class="w-50 pe-5">
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
                    <div class="w-50 pe-5">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection