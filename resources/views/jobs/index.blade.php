<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>


    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold">Job Openings:</h2>
        <span>{{ now()->format('F j, Y, g:i a') }}</span>
    </div>
    <div class="space-y-4">
        @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-yellow-900 text-yellow-900 rounded-lg">
                    <div class="text-sm text-stone-950">
                        {{ $job->employer->name }}
                    </div>

                    <strong>{{ $job['title'] }}</strong> 
                    <span class="text-stone-950">
                        at {{ $job['company'] }} - {{ $job['salary'] }}
                    </span>
                </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>