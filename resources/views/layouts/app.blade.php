<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.header')
    @section('header-title')
        Write a comment
    @endsection
    @yield('content')
    @include('includes.footer')
</body>
</html>
