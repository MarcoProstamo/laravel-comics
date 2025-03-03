<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Comics</title>
    </head>
    <body>

        @extends('layouts.layout')

        @section('content')
            Ciao sono il Contenuto!
        @endsection

    </body>
</html>
