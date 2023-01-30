<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid-120 img-thumbnail-bg "
                             src="{{ asset('assets/images/rino/rino1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Formulario de Registro de productos</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            En este espacio solo podrás crear productos,
                            estos se almacenarán y podrás administrarlos, o editarlos volviendo al HOME
                        </p>
                        <p>
                            El formulario está diseñado para que puedas crear tus productos de manera efectiva,
                            reutilizando información que ya habías agregado.
                        </p>
                        <a href="{{ route('show_home_products',['people' => $people['slug']] ) }}"
                           class="btn btn-success  btn-lg shadow-lg  btn_guest ">Volver a Productos</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            @include('rino.form.form_create')
        </div>
    </div>
</x-foxy-layout>
