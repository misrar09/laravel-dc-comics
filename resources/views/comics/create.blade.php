@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5">Add New Comic</h1>
        </div>
        <div class="row">

            <form action="{{ route('comic.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Insert Image" name= "thumb">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Insert Price" name= "price">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" placeholder="Insert Series" name= "series">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Insert Type" name= "type">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Insert Title" name= "title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Insert Descriptoin"
                        name= "description">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Insert Sale Date"
                        name= "sale_date">
                </div>
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
            <a href="{{ route('comic.index') }}" class="btn btn-secondary w-25 mt-3 mb-5 text-white">Go Back</a>
        </div>
    </div>
@endsection
