<x-layout>

    <x-slot:heading>
        Create Job
    </x-slot:heading>

<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Job Details</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details to get started.</p>

        <x-form-field>
          <x-form-label for="title"> Title </x-form-label>
          <div class="mt-2">  
            <x-form-input name="title" id="title" placeholder="Software Developer" required/>
            <x-form-error name="title" />
          </div>
        </x-form-field>

      <x-form-field>
        <x-form-label for="company"> Company </x-form-label>
        <x-form-input name="company" id="company" placeholder="Company Name" required/>
        <x-form-error name="company" />
      </x-form-field>

      <x-form-field>
        <x-form-label for="salary"> Salary </x-form-label>
        <x-form-input name="salary" id="salary" placeholder="10 LPA" required/>
        <x-form-error name="salary" />
      </x-form-field>


  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs" class="text-sm/6 font-semibold text-gray-900"> Cancel </a>
    <x-form-button>Save</x-form-button>
  </div>
</form>


</x-layout>