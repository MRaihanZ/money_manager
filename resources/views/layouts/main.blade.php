<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <title>Money Manager | {{ $title }}</title>
</head>

<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
