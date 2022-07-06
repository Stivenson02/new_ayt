<x-guest-layout>
    <div id="auth-left">
        <h1 class="auth-title">Inicia</h1>
        <p class="auth-subtitle mb-5">Si ya tienes una cuenta inicia sesión</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Phone Number -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="phone" class="form-control form-control-xl"
                         placeholder="Celular"
                         type="number" name="phone" :value="old('phone')" required
                         autofocus/>
                <div class="form-control-icon">
                    <i class="bi bi-phone"></i>
                </div>
            </div>

            <!-- Password -->
            <div class="form-group position-relative has-icon-left mb-4">
                <x-input id="password" class="form-control form-control-xl"
                         placeholder="Contraseña"
                         type="password"
                         name="password"
                         required autocomplete="current-password"/>
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="form-check-input btn-outline-success"
                          name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar mi sesión') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4 text-center">
                <x-button class="btn btn-primary btn-block btn-lg shadow-lg mt-5 btn_guest">
                    {{ __('Iniciar sesión') }}
                </x-button>

                @if (Route::has('password.request'))
                    <a class=" underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Olvide la contraseña') }}
                    </a>
                @endif
            </div>
        </form>

    </div>
</x-guest-layout>
