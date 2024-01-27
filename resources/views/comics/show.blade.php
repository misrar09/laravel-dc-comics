@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>{{ $detail->title }}</h3>
        </div>
        <div class="row">
            <h4>{{ $detail->price }}</h4>
        </div>
        <div class="row">
            <p>{{ $detail->description }}</p>
        </div>
    </div>
@endsection
