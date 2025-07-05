<!-- Back Button -->

    <div class="mb-6">
        <a {{ $attributes }} class="inline-flex items-center text-yellow-800 hover:text-gray-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            {{ $slot }}
        </a>
    </div>