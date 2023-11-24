<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 7 & MySQL CRUD Tutorial</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        @yield('main')
    </div>
    {{-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script href="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
