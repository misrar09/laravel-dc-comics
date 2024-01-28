@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $detail->title }}</h1>
        </div>
        <div class="row bg-primary text-white">
            <h4>{{ $detail->price }}</h4>
        </div>
        <div class="row mb-5">
            <p>{{ $detail->description }}</p>
        </div>
    </div>
    <div class="row mb-2 mx-5">
        <div class="col mx-5">
            <a href="{{ route('comic.edit', $detail->id) }}" class="btn btn-danger w-25 mx-5">Edit this Comic</a>
            <a href="{{ route('comic.index') }}" class="btn btn-secondary w-25">Go Back</a>
        </div>
    </div>
@endsection
