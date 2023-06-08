<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="/trains_checker_favicon.png" type="png">

    <title>Trains Checker</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">
    <main class="bg-dark text-light">
        @yield('content')
    </main>
</body>

</html>
