<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fortify</title>
</head>

<body>
<ul>
    @guest
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
        <li>
            <a href="{{ route('register') }}">Register</a>
        </li>
    @endguest

    @auth
        <li><a href="{{ route('profile') }}">{{ auth()->user()->name }}</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('auth.password') }}">Change password</a></li>
        <li><a href="{{ route('auth.delete') }}">Delete account</a></li>
        <li><a href="{{ route('auth.twofactor') }}">Two factor</a></li>
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
