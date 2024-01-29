@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="mt-5">{{ $detail->title }}</h1>
        </div>
        <div class="row bg-primary text-white">
            <h4>{{ $detail->price }}</h4>
        </div>
        <div class="row mb-5">
            <p>{{ $detail->description }}</p>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col ">
            <a href="{{ route('comic.edit', $detail->id) }}" class="btn btn-danger w-25 m-auto text-white">Edit this Comic</a>
            <a href="{{ route('comic.index') }}" class="btn btn-secondary w-25 m-auto text-white">Go Back</a>
        </div>
    </div>
@endsection
