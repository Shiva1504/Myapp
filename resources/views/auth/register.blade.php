<x-layout>

    <x-slot:heading>
        Register
    </x-slot:heading>

<form method="POST" action="/register">
    @csrf

        <x-form-field>
          <x-form-label for="first_name"> First Name </x-form-label>
          <div class="mt-2">  
            <x-form-input name="first_name" id="first_name" placeholder="Shiva" required/>
            <x-form-error name="first_name" />
          </div>
        </x-form-field>

      <x-form-field>
        <x-form-label for="last_name"> Last Name </x-form-label>
        <div class="mt-2">  
         <x-form-input name="last_name" id="last_name" placeholder="Naidu" required/>
         <x-form-error name="last_name" />
         </div>
      </x-form-field>

      <x-form-field>
        <x-form-label for="email"> Email </x-form-label>
        <div class="mt-2">  
         <x-form-input name="email" id="email" placeholder="test@example.com" type="email" required/>
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

      <x-form-field>
        <x-form-label for="password_confirmation"> Confirm Password </x-form-label>
        <div class="mt-2">  
         <x-form-input name="password_confirmation" id="password_confirmation" placeholder="confirm password" type="password_confirmation" required/>
         <x-form-error name="password_confirmation" />
         </div>
      </x-form-field>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900"> Cancel </a>
    <x-form-button>Register</x-form-button>
  </div>
</form>


</x-layout>