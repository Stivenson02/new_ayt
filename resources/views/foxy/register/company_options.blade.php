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
                        <h4 class="card-title">Completa la Informacion </h4>
                    </div>
                    <div class="card-body">
                        <p>Carga tu logo y completa los campos del RUT, <b>si no tienes RUT no te preocupes,</b> puedes dar clic en <b>CONTINUAR.</b>
                        Usaremos estos datos para imprimir y mostrar tus facturas</p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.register.company_options_form')

    </div>
</x-foxy-layout>
