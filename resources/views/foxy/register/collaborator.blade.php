<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid img-thumbnail-bg "
                             src="{{ asset('assets/images/foxy/foxy1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Tus Colaboradores</h4>
                    </div>
                    <div class="card-body">
                        <p>Resgistra a tu equipo de trabajo e invitalos a ser parte de <b>Lukran Heaven.</b></p>
                        <p>Siempre tendras esta opcion a tu dispocicion, puedes dar clic en continuar y realizar el
                            registro despues </p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.partials.collaborator_form')


        <div class="card">
            <div class="row justify-content-md-center">
                <div class="m-3 col-md-auto">
                    <a href="{{ route('show_register_welcome',['people' => $people['slug']] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
