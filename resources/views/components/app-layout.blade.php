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
            <li><a href="{{ route('auth.delete') }}">Delete account</a></li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Log out</button>
            </form>
        </li>
    @endauth

</ul>
{{ $slot }}
</body>
</html>
</DOCTYPE>
