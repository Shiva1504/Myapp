<x-layout>

    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <button class="relative inline-flex items-center justify-center rounded-md bg-yellow-900 p-2 text-gray-100 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"><a href="/jobs">Back</a></button>

    <p class="mt-4">Company: {{ $job['company'] }}</p>
    <p class="mt-2">Salary: {{ $job['salary'] }}</p>

</x-layout>