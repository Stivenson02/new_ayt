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
                        <h4 class="card-title">Tus Colaboradores</h4>
                    </div>
                    <div class="card-body">
                        <p>Puedes registrar a tus colaboradores en <b>Lukran Heaven.</b> y poderlos adminsitrar desde este panel</p>
                        <p>Recuerda que siempre tendras esta opcion a tu dispocicion. </p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.partials.collaborator_form')
        <div class="card">
            <div class="row justify-content-md-center">
                <div class="m-3 col-md-auto">
                    <a href="/dashboard"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
