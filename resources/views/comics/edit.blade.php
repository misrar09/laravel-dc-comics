@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <h1>Edit/Modify Comic</h1>
        </div>
        <div class="row">
            <form action="{{ route('comic.update', $editData->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Insert Image" name= "thumb"
                        value="{{ $editData->thumb }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Insert Price" name= "price"
                        value="{{ $editData->price }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" placeholder="Insert Series" name= "series"
                        value="{{ $editData->series }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Insert Type" name= "type"
                        value="{{ $editData->type }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Insert Title" name= "title"
                        value="{{ $editData->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Insert Descriptoin"
                        name= "description" value="{{ $editData->description }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Insert Sale Date"
                        name= "sale_date" value="{{ $editData->sale_date }}">
                </div>
                <button type="submit" class="btn btn-primary">Modify</button>
            </form>
        </div>
    </div>
@endsection
