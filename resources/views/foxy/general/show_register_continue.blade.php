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
                        <h4 class="card-title">Continua tus Procesos</h4>
                    </div>
                    <div class="card-body">
                        <p>Tienes algún proceso sin terminar, por favor da clic en <b>CONTINUAR</b> y finaliza tus
                            procesos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-5">
            @foreach($processes as $process)
                <div class="row">
                    <div class="col-sm-2">
                        <div class="card-header">
                            <h4 class="card-title">Proceso</h4>
                        </div>
                        <div class="card-body">
                        <p></p>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="card-header">
                            <h4 class="card-title">Continua tus Procesos</h4>
                        </div>
                        <div class="card-body">
                            <p>Tienes algún proceso sin terminar, por favor da clic en <b>CONTINUAR</b> y finaliza tus
                                procesos</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-foxy-layout>
