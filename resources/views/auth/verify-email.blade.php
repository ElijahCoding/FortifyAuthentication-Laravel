<x-app-layout>
    <p>Verify your email</p>

    @if (session('status') === 'verificaction-link-sent')
        <div>
            A verification email has been sent
        </div>
    @endif

    <form action="{{ route('verificaction.send') }}" method="post">
        @csrf
        <button type="submit">Resend email</button>
    </form>
</x-app-layout>
