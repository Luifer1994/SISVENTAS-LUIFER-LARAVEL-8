<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('user.store') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Tipo de Documento') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="tipoDocumento" :value="old('tipoDocumento')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('Numero Documento') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="numeroDocumento" :value="old('numeroDocumento')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('Genero') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="genero" :value="old('genero')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Correo') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Contraseña') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirmar Contraseña') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <x-jet-label value="{{ __('Rol') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="rol" :value="old('rol')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('ciudad') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label value="{{ __('Direccion') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required autofocus autocomplete="name" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
