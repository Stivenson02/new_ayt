<x-guest-layout>
    <div id="auth-left">
        <h1 class="auth-title">Sign Up</h1>
        <p class="auth-subtitle mb-5">Para empezar es necesario registrarse en nuestro sistema</p>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="name" class="form-control form-control-xl" type="text" name="name" :value="old('name')"
                         placeholder="Nombre"
                         required autofocus/>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>

            <!-- Email Address -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="email" class="form-control form-control-xl" type="email" name="email" :value="old('email')"
                         placeholder="Email" required/>
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="password" class="form-control form-control-xl"
                         type="password"
                         name="password"
                         placeholder="Contraseña"
                         required autocomplete="new-password"/>
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="password_confirmation" class="form-control form-control-xl"
                         type="password"
                         placeholder="Confirmar Contraseña"
                         name="password_confirmation" required/>
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>


            <div class="mt-4 ">
                <div class="flex items-center form-check">
                    <x-input class="form-check-input btn-outline-success" type="checkbox" name="terms" id="terms"/>
                    <label class="form-check-label " for="flexCheckDefault">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="/terms" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="/policy" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                            ]) !!}

                    </label>
                </div>
            </div>
            <x-button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Register') }}</x-button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
            <p class='text-gray-600'><a href="{{ route('login') }}" class="font-bold">Ya tengo una cuenta</a></p>
        </div>
    </div>
</x-guest-layout>
