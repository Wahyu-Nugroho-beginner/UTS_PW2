<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link href="{{ asset('style/css.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logo.png')}}">
</head>

<body>
    @include('desa wisata.layout.header')
    <div class="container">
        @yield('content')
    </div>
    @include('desa wisata.layout.footer')
</body>

</html>