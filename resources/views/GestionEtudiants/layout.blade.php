<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('style/navbar.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navigation">
        <ul>
            <li><a href="/">Liste etudiants</a></li>
            <li><a href="/ajouter">Ajouter etudiants</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>