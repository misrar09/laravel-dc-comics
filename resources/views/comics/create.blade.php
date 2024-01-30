@extends('layouts.app')



@section('content')
    {{-- TODO: insert error control --}}


    <div class="container">
        <div class="row">
            <h1 class="mt-5">Add New Comic</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif




        </div>
        <div class="row">

            <form action="{{ route('comic.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                        placeholder="Insert Image" name= "thumb" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="price"
                        placeholder="Insert Price" name= "price" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                        placeholder="Insert Series" name= "series" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                        placeholder="Insert Type" name= "type" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        placeholder="Insert Title" name= "title" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                        placeholder="Insert Descriptoin" name= "description" value="{{ old('price') }}">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                        placeholder="Insert Sale Date" name= "sale_date" value="{{ old('price') }}">
                </div>
                <button type="submit" class="btn btn-primary">Insert</button>
            </form>
            <a href="{{ route('comic.index') }}" class="btn btn-secondary w-25 mt-3 mb-5 text-white">Go Back</a>
        </div>
    </div>
@endsection
