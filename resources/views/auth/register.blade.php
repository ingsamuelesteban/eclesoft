<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" novalidate>
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- ROL -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Tipo de Acceso')" />

                <select name="rol" id="rol" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                        <option value="">-- Selecciona un rol -- </option>
                        <option value="1">-- Administrador -- </option>
                        <option value="2">-- Oficinista -- </option>
                

                </select>

                
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Repite la contraseña')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex justify-between my-5">
                <x-link 
                     :href="route('login')"
                >
                     Iniciar sesión
                  
                </x-link>
 
                 <x-link
                     :href="route('password.request')"
                 >
                     Olvidaste tu contraseña
                  </x-link>
 
                
             </div>

            <x-primary-button class="w-full justify-center">
                {{ __('Crear Cuenta') }}
            </x-primary-button>

        </form>
    </x-auth-card>
</x-guest-layout>
