<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('vendor_assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="/css/set1.css">
</head>

<body>
    @yield('content')
    <script src="/js/app.js"></script>
</body>

</html>
