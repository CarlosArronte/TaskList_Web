<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name*')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="lastname" :value="_('Lastname')"/>
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password*')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password*')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-input-label for="user_type" :value="__('Select your plan')" />
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h3>Free Plan</h3>
                    <h4 class="text-centered">R$0</h4> 
                        <input type="radio" 
                        name="user_type" 
                        id="free"
                        value="Free">
                </div>
                <div class="col-sm-3">
                    <h3>Silver Plan</h3>
                    <h4 class="text-centered">R$25/year</h4> 
                        <input type="radio" 
                        name="user_type" 
                        id="silver"
                        value="Silver">
                </div>
                <div class="col-sm-3">
                    <h3>Gold Plan</h3>
                    <h4 class="text-centered">R$50/year</h4> 
                        <input type="radio" 
                        name="user_type" 
                        id="gold"
                        value="Gold">
                </div>
                <div class="col-sm-3">
                    <h3>Platinum Plan</h3>
                    <h4 class="text-centered">R$100/year</h4> 
                        <input type="radio" 
                        name="user_type" 
                        id="platinum"
                        value="Platinum">
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
