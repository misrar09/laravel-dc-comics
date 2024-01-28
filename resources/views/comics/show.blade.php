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
    <div class="row mb-2">
        <a href="{{ route('comic.edit', $detail->id) }}" class="btn btn-danger">Edit this Comic</a>
    </div>
    <div class="row">
        <a href="{{ route('comic.index') }}" class="btn btn-secondary">Go Back</a>
    </div>
@endsection
