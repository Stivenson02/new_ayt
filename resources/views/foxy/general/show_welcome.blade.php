<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid img-thumbnail-bg thumb-post"
                             src="{{ asset('assets/images/foxy/foxy1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Bienvenido a Lukran Heaven</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Has finalizado tu proceso de registro, estamos listos para empezar a operar,
                            te recomendamos navegar las opciones que encontraras en el menú de lado izquierdo,
                            en cada módulo habrá un compañero que te guiara en los procesos.
                        </p>
                        <p>
                            Da clic en <b>Finalizar Registro</b> para continuar
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row justify-content-md-center">
                <div class="m-3 col-md-auto">
                    <a href="{{ route('finish_register_welcome',['people' => $people, 'process' => $process] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Finalizar Registro</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
