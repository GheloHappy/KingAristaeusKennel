<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>King Aristaeus</title>
    <link rel="stylesheet" href="/css/home/home.css">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    @yield('content')
    @yield('location')
    @yield('contact')
</body>
</html>