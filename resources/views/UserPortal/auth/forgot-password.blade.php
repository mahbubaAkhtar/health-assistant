<x-guest-layout>


    <!-- Session Status -->
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

   <div class="container form-container">
       <div class="mb-4 text-sm text-gray-600">
           {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
       </div>
       <form method="POST" action="{{ route('password.email') }}">
           @csrf

           <!-- Email Address -->
           <div>
               <x-input-label for="email" :value="__('Email')" />
               <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
               <x-input-error :messages="$errors->get('email')" class="mt-2" />
           </div>

           <div class="flex items-center justify-end mt-4">
               <x-primary-button>
                   {{ __('Email Password Reset Link') }}
               </x-primary-button>
           </div>
       </form>
   </div>
</x-guest-layout>

<style>
    #nav_logo{

        width: 50%;
        margin-top: 2%;
        margin-left: 185px;
    }
    .container {
        background-color: #fff;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        width: 768px;
        max-width: 100%;
        min-height: 100px;
    }

</style>
