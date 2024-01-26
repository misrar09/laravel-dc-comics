@extends('layouts\app')


@section('content')
    <h1>Hello</h1>

    <div class="all_cards_bg">
        <div class="all_cards_wrapper">
            <div class="all_cards">
                @foreach ($comic_books as $card)
                    <div class="card">
                        <img src="{{ $card['thumb'] }}" alt="card image">
                        <p>{{ $card['series'] }}</p>
                    </div>
                @endforeach

            </div>
            <div class="centered_button">
                <button class="card_btn">LOAD MORE</button>
            </div>
        </div>
    </div>

    <style>
        .card {
            width: 10rem;
            height: 11rem;
            margin-bottom: 2rem;
        }

        .card img {
            width: 100%;
            height: 100%;
        }

        .card p {
            font-size: 0.80rem;
            padding-top: 0.5rem;
        }

        .wrapper {
            width: 75%;
            margin: 0 auto;
        }


        .centered_button {
            width: 7rem;
            margin: 2rem auto;
        }

        .card_btn {
            width: 9rem;
            height: 2rem;
            background-color: #3682f3;
            color: white;
            font-weight: bold;
            border-color: #3682f3;

        }

        .all_cards_bg {
            background-color: black;
            height: 36rem;
        }

        .all_cards_wrapper {
            width: 60%;
            margin: 0 auto;
        }

        .all_cards {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            color: white;
            padding: 2rem 0;
        }
    </style>
@endsection
