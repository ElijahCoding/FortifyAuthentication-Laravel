<x-app-layout>
    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit">Register</button>
    </form>
</x-app-layout>
