@extends('layouts.layout')


@section('title')
    Comics
@endsection

@section('content')
    
    <section class="jumbotron"></section>
    <section class="comics-section">
        <div class="container position-relative">
            <div class="position-absolute top-0 start-0 translate-middle-y badge text-bg-primary rounded-0 p-2 fs-6 fw-semibold">CURRENT SERIES</div>
            <div class="comics">
                Fumetti
            </div>
            <div class="mx-auto text-center">
                <button class="border-0 badge text-bg-primary rounded-0 p-2 fs-6 fw-semibold cursor-pointer">LOAD MORE</button>
            </div>
        </div>
    </section>
    

@endsection
