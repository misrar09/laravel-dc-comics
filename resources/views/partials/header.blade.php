<?php

$navTitles = [
    [
        'text' => 'CHARACTERS',
        'link' => '#',
    ],
    [
        'text' => 'COMICS',
        'link' => '#',
    ],
    [
        'text' => 'MOVIES',
        'link' => '#',
    ],
    [
        'text' => 'TV',
        'link' => '#',
    ],
    [
        'text' => 'GAMES',
        'link' => '#',
    ],
    [
        'text' => 'COLLECTIBLES',
        'link' => '#',
    ],
    [
        'text' => 'VIDEOS',
        'link' => '#',
    ],
    [
        'text' => 'FANS',
        'link' => '#',
    ],
    [
        'text' => 'NEWS',
        'link' => '#',
    ],
    [
        'text' => 'SHOP',
        'link' => '#',
    ],
];

?>
<div class="wrapper">
    <header>
        <nav class="navbar">
            <img src="/img/dc-logo.png " alt="logo">
            <div class="titles">

                @foreach ($navTitles as $title)
                    <a href="{{ $title['link'] }}"> {{ $title['text'] }} </a>
                @endforeach


            </div>
        </nav>
    </header>
</div>


<style>
    .wrapper {
        width: 75%;
        margin: 0 auto;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.85rem;
        height: 6rem;


    }


    .titles a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        cursor: pointer;
        margin: 1rem;
    }

    .titles>a:hover {
        color: #3682f3;
        border-bottom: 7px solid #3682f3;
        padding-bottom: 2.1rem;
    }

    .navbar img {
        padding-right: 5rem;
        width: 10rem;
    }
</style>
