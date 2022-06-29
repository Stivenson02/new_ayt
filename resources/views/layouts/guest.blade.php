<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lukran Heaven') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Vendors -->
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Styles -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/pages/auth.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            {{ $slot }}
        </div>
        <div class="col-lg-7 d-lg-block">
            <div id="auth-right">

                <section class="page-section" id="services">
                    <div class="container p-4 p-lg-5">

                        @if (Request::path() == "register")
                            <h2 class="text-center mt-0">¿Ya estas Registrado?</h2>
                            <hr class="divider"/>
                            <h2 class="text-center mt-0"><a href="{{ route('login') }}" class="font-bold">Inicia sesion
                                    AQUI</a></h2>
                        @elseif(Request::path() == "login")
                            <h2 class="text-center mt-0">¿Aún no estás Registrado?</h2>
                            <hr class="divider"/>
                            <h2 class="text-center mt-0"><a href="{{ route('register') }}" class="font-bold">Registrate
                                    AQUI</a></h2>
                        @endif
                        <div class="row gx-4 gx-lg-5">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-clipboard fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Seguimiento</h3>
                                    <p class="text-muted mb-0">Que no se te olvide y pierdas la información</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-bell fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Notificación</h3>
                                    <p class="text-muted mb-0">Mantén a tu equipo informado, de todo lo que pasa</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="mt-5">
                                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                                    <h3 class="h4 mb-2">Crecimiento</h3>
                                    <p class="text-muted mb-0">Crezcamos sanamente y con todo bajo control</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
</body>
</html>
