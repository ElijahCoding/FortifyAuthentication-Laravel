<x-app-layout>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('password.request') }}">Forgotten your password?</a>
        </div>

        <button type="submit">Login</button>
    </form>
</x-app-layout>
