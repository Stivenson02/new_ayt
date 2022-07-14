<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid img-thumbnail-bg thumb-post" src="assets/images/foxy/foxy1-1.png">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Registro tus Colaboradores </h4>
                    </div>
                    <div class="card-body">
                        <p>Estos campos son opcionales, puedes dar clic en <b>CONTINUAR</b> si no deseas llenarlos, o llenarlos y continuar con tu registro.
                        Usaremos estos datos para imprimir y mostrar en tus facturas</p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.register.stakeholder_form')

    </div>
</x-foxy-layout>
