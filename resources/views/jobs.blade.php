<x-layout>

    <x-slot:heading>
        Job Listing
    </x-slot:heading>


    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold">Job Openings:</h2>
        <span>{{ now()->format('F j, Y, g:i a') }}</span>
    </div>
    <ul>
        @foreach ($jobs as $job)
            <li class="mb-2">
                <a href="/jobs/{{ $job['id'] }}" class="text-yellow-900 hover:underline">
                    <strong>{{ $job['title'] }}</strong> 
                </a>
                    at {{ $job['company'] }} - {{ $job['salary'] }}
            </li>
        @endforeach
    </ul>

</x-layout>