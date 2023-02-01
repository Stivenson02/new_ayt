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
                        <img class="img-fluid-elpha img-thumbnail-bg"
                             src="{{ asset('assets/images/elpha/elpha1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-9 mx-4">
                    <div class="card-header">
                        <h4 class="card-title">Registro de Servicios</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Hola soy <b>Elpha,</b> la encargada de gestionar y administrar los servicios
                            de tu negocio. En este espacio puedes escoger uno de los tres servicios que desees registrar,
                            podrás editar, o descartar cada uno de estos en el historial.
                        </p>
                        <p>
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
            <div class="m-3 col-md-auto">
                <a href="{{ route('show_rino_products_create',['people' => $people['slug']] ) }}"
                   class="btn btn-success  btn-lg shadow-lg  btn_guest ">Registrar Productos</a>
            </div>
        </div>
    </div>


</x-app-layout>
