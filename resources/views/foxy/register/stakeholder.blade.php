<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid img-thumbnail-bg " src="{{ asset('assets/images/foxy/foxy1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Cuéntanos un poco más de ti</h4>
                    </div>
                    <div class="card-body">
                        <p>Me gustaría conocerte un poco más, y en el camino tendremos la oportunidad de hacerlo, por el momento; completa la siguiente información para terminar el registro de perfil </p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.register.stakeholder_form')

    </div>
</x-foxy-layout>
