<x-layout>

    <x-slot:heading>
        Home
    </x-slot:heading>

    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @auth
        <h1>Hi, {{ auth()->user()->first_name }}</h1>
    @endauth

    @guest
        <h1>Welcome, Guest</h1>
    @endguest

    <p>This is a simple Laravel application.</p>
    <p>Current Date: {{ date('d-m-Y') }}</p>

    <a href="/jobs">View Jobs</a>
</x-layout>