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
                        <h4 class="card-title">Continua con tu Proceso de registro</h4>
                    </div>
                    <div class="card-body">
                        <p>Tienes algún proceso sin terminar, por favor da clic en <b>CONTINUAR</b> y finaliza tus
                            procesos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($processes as $process)
                <div class="col-sm-12 col-md-6">
                    <div class="card mt-5">
                        <div class="row">
                            <div class=" offset-md-1 col-sm-3">
                                <div class="card-header">
                                    <h4 class="card-title">Compañia</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{\App\Models\Company\CompanyPeople::firstWhere('slug', $process->slug_table)->company->name}}</p>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class=" text-center card-body">
                                    <p> Continua tu proceso dando clic en el siguiente Boton</p>
                                    <a href="{{route($process['next_url'], ['company' => $process['slug_table'], 'process' => $process['slug']])}}">
                                        <button type="button" class="btn btn-primary shadow-lg  btn_guest">Continuar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-foxy-layout>
