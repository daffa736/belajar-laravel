<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
</head>
<body class="bg-light">
    <!-- <img src="..." class="img-fluid" alt="..."> -->
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>
</html>