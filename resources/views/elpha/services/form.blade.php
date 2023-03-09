<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid-120 img-thumbnail-bg "
                             src="{{ asset('assets/images/elpha/elpha1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Formulario de Registro de Servicios</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            En este espacio solo podrás crear servicios,
                            estos se almacenarán para su posterior analisis
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            @include('elpha.services.form_create')
        </div>

        <div class="card">
            <div class="row justify-content-md-center">
                <div class="text-center m-3 col-ms-auto">
                    <a href="{{ route('home_elpha_services',['people' => $people['slug']] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Volver a Servicios</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
