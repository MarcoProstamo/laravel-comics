@extends('layouts.layout')


@section('title')
    Comics
@endsection

@section('content')
    <section class="jumbotron"></section>
    <section class="comics-section">
        <div class="container position-relative py-5">
            <div class="position-absolute top-0 start-0 translate-middle-y badge text-bg-primary rounded-0 p-2 fs-6 fw-semibold">CURRENT SERIES</div>
            <div class="comics row row-cols-6 g-3">
                @php
                    $comics = config('comics');
                @endphp
                @foreach ( $comics as $comic )
                    <div class="comic text-center">
                        <img class="cursor-pointer" src="{{ $comic["thumb"] }}" alt="{{ $comic["series"] . " Cover" }}" width="75px" height="100px">
                        <h3 class="text-light fs-6 fw-semibold">{{ $comic["series"] }}</h3>
                    </div>
                @endforeach
            </div>
            <div class="mx-auto text-center mt-4">
                <button class="border-0 badge text-bg-primary rounded-0 p-2 fs-6 fw-semibold cursor-pointer">LOAD MORE</button>
            </div>
        </div>
    </section>
@endsection
