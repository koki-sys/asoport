<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9ddb128e39.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #EEEEEE;
        }
    </style>
</head>

<body>
    @yield('content')
</body>

</html>