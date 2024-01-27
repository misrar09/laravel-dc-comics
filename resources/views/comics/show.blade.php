@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>{{ $detail->title }}</h1>
        </div>
        <div class="row bg-primary text-white">
            <h4>{{ $detail->price }}</h4>
        </div>
        <div class="row">
            <p>{{ $detail->description }}</p>
        </div>
    </div>
@endsection
