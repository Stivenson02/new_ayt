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
                        <h4 class="card-title">Has sido invitado a Lukran Heaven</h4>
                    </div>
                    <div class="card-body">
                        <p>Hola me llamo <b>FOXI</b>, y te guiaré en el proceso de registro, completa tu registro en la compañía que te ha asociado</p>
                    </div>
                </div>
            </div>
        </div>
            @foreach($stakeholders->peoples as $people)
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class=" text-center card-body">
                                    <p> </p>
                                    <a href="{{ route('show_registry_collaborator_integration',['people' => $people->slug] ) }}">
                                        <button type="button" class="btn btn-primary shadow-lg  btn_guest">Completa tu Registro</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card-header">
                                    <h4 class="card-title">Compañia</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{$people->company->name}}</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card-header">
                                    <h4 class="card-title">Colaborador</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{$stakeholders->first_name.' '.$stakeholders->first_last_name}}</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card-header">
                                    <h4 class="card-title">Numero de Contacto</h4>
                                </div>
                                <div class="card-body">
                                    <p>{{$stakeholders->phone}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
            @endforeach
    </div>
</x-foxy-layout>
