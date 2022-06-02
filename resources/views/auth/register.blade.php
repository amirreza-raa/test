<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>

            {{-- family --}}
            <div class="mt-4">
                <x-label for="family" :value="__('family')" />

                <x-input id="family" class="block mt-1 w-full" type="test" name="family" :value="old('family')" required />
                @error('familt')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>

            {{-- city --}}
            <div class="mt-4">
                <x-label for="city" :value="__('city')" />

                <x-input id="city" class="block mt-1 w-full" type="city" name="city" :value="old('city')" required />
                @error('city')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>

                {{-- word --}}
            <div class="mt-4">
                <x-label for="word" :value="__('word')" />

                <x-input id="word" class="block mt-1 w-full" type="word" name="word" :value="old('word')" required />
                @error('word')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>


            {{-- post --}}
            <div class="mt-4">
                <x-label for="post" :value="__('post')" />

                <x-input id="post" class="block mt-1 w-full" type="post" name="post" :value="old('post')" required />
                @error('post')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>

            {{-- phone --}}
            <div class="mt-4">
                <x-label for="phone" :value="__('phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required />
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            

            {{-- data --}}

            <div class="mt-4">
                <x-label for="data" :value="__('date')" />

                <x-input id="data" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                @error('date')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
      
                    {{-- file --}}
            <div class="mt-4">
                <x-label for="file" :value="__('file')" />

                <x-input id="file" class="block mt-1 w-full" type="file" name="file" :value="old('file')" required />
                @error('file')
                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>

         
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
