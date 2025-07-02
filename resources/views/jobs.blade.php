<x-layout>

    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <h2>Job Openings:</h2>
    <br>
    <ul>
        {{-- Loop through the jobs array and display each job --}}
        @foreach ($jobs as $job)
            <li class="mb-2">
                <a href="jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                    <strong>{{ $job['title'] }}</strong> 
                </a>
                    at {{ $job['company'] }} - {{ $job['salary'] }}
            </li>
        @endforeach
    </ul>

</x-layout>