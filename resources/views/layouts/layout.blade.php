<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') ?? 'Comics'</title>
</head>
<body>
    @include('components.header')

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>