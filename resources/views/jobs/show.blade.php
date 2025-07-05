<x-layout>

    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <!-- <p class="mt-4">Sort by:</p>
    <ul class="list-disc pl-5">
        <li><a href="/jobs?sort=salary" class="text-blue-500 underline">Highest Salary</a></li>
        <li><a href="/jobs?sort=title" class="text-blue-500 underline">Job Title</a></li>
    </ul> -->

    <x-backButton href="/jobs">Back to Jobs</x-backButton>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <p class="mt-2">Salary: {{ $job->salary }}</p>
        <p class="mt-4">Company: {{ $job->company }}</p>
        <div class="mt-6 flex justify-end">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit</x-button>
        </div>
    </div>



</x-layout>