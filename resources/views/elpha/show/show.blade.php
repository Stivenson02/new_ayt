<x-app-layout menu="services" people="{{$people['slug']}}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-sm-2">
                    <div class="container d-block mt-5">
                        <img class="img-fluid-elpha img-thumbnail-bg mx-5"
                             src="{{ asset('assets/images/elpha/elpha1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-9 mx-4">
                    <div class="card-header text-center">
                        <h4 class="card-title">Registro de Servicios</h4>
                    </div>
                    <div class="card-body text-center">
                        <p class="mx-3">
                            Hola soy <b>Elpha,</b> la encargada de gestionar y administrar los servicios
                            de tu negocio. En este espacio puedes escoger uno de los tres servicios que desees registrar,
                            podrás editar, o descartar cada uno de estos en el historial.
                        </p>
                        <p class="mx-3">
                            Por seguridad nada se podrá eliminar, solo el administrador podrá descartar de los informes
                            los servicios que queden en estado descartado.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card">
        <div class="row justify-content-md-center">
            <div class="text-center m-3 col-ms-auto">
                <a href="{{ route('show_elpha_options_services',['people' => $people['slug']] ) }}"
                   class="btn btn-success  btn-lg shadow-lg  btn_guest ">Registrar Servicios</a>
            </div>
        </div>
    </div>


</x-app-layout>
