<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fortify</title>
</head>

<body>
<ul>
    @guest
        <li>
            <a href="">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}">Register</a>
        </li>
    @endguest

    @auth
        <li><a href="">{{ auth()->user()->name }}</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    @endauth

</ul>
{{ $slot }}
</body>
</html>
</DOCTYPE>
