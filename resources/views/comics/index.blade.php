@extends('layouts\app')


@section('content')
    <div class="all_cards_bg">
        <div class="centered_button">
            <a href="{{ route('comic.create') }}" class="btn btn-primary">Create a New Comic</a>
        </div>
        <div class="all_cards_wrapper">
            <div class="all_cards">
                @foreach ($comic_books as $card)
                    <div class="card">
                        <form class=""position-absolute action="{{ route('comic.destroy', $card->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-warning" onclick="return confirmDelete()">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                        <script>
                            function confirmDelete() {
                                return confirm('Are you sure you want to delete this item?');
                            }
                        </script>
                        <img src="{{ $card['thumb'] }}" alt="card image">
                        <p><a href="{{ route('comic.show', $card->id) }}">{{ $card['series'] }}</a></p>
                        {{-- added show route to sync index id to see the details of the card --}}

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
            margin-bottom: 5rem;
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
            margin: auto;
        }

        .btn {
            width: 9rem;
            font-weight: bold;

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
