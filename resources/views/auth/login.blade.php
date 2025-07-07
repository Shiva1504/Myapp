<x-layout>

    <x-slot:heading>
        Log In
    </x-slot:heading>

<form method="POST" action="/login">
    @csrf

      <x-form-field>
        <x-form-label for="email"> Email </x-form-label>
        <div class="mt-2">  
         <x-form-input name="email" id="email" placeholder="test@example.com" type="email" :value="old('email')" required/>
         <x-form-error name="email" />
         </div>
      </x-form-field>

      <x-form-field>
        <x-form-label for="password"> Password </x-form-label>
        <div class="mt-2">  
         <x-form-input name="password" id="password" placeholder="password" type="password" required/>
         <x-form-error name="password" />
         </div>
      </x-form-field>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900"> Cancel </a>
    <x-form-button>Log In</x-form-button>
  </div>
</form>


</x-layout>