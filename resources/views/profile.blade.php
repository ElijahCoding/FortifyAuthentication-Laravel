<x-app-layout>
    <form action="{{ route('user-profile-information.update') }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ auth()->user()->name }}">

            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="{{ auth()->user()->email }}">

            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Register</button>
    </form>
</x-app-layout>
