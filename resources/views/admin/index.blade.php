@extends('layouts.admin')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table ms_table table-striped">

                    <thead class="bg-dark text-light py-2">

                        <tr>

                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Series</th>
                            <th scope="col" class="px-3">Sale_Date</th>
                            <th scope="col" class="px-5">Type</th>

                        </tr>

                    </thead>

                    <tbody>
                        @foreach($comics as $comic)
                        <tr class="py-4 ">
                            <td scope="row">{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>{{$comic->type}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection