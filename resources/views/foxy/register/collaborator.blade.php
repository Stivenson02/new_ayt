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
                        <p>Resgistra a tu equipo de trabajo e invitalos a ser parte de <b>Lukran Heaven.</b></p>
                        <p>Siempre tendras esta opcion a tu dispocicion, puedes dar clic en continuar y realizar el
                            registro despues </p>
                    </div>
                </div>
            </div>
        </div>
        @include('foxy.register.collaborator_form')

        <div class="card">
            @foreach( $collaborators as $collaborator)
                <div class="row m-3">
                    <div class="col-md-4">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="full_name">Nombre</label>
                            <input id="full_name" class="form-control form-control-xl mt-2" type="text" name="full_name"
                                     value="{{$collaborator['first_name']}} {{$collaborator['first_last_name']}}" autocomplete="off"
                                     autofocus readonly/>
                            <div class="form-control-icon mt-3">
                                <i class="bi bi-person-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="phone">Celular</label>
                            <input id="phone" class="form-control form-control-xl mt-2" type="text" name="phone"
                                   value="{{$collaborator['phone']}} " autocomplete="off"
                                   autofocus readonly/>
                            <div class="form-control-icon mt-3">
                                <i class="bi bi-phone-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="phone">Estado</label>
                            <x-button data-toggle="tooltip"
                                      class=" form-control form-control-xl mt-2 {{$status_color[$collaborator['status']][1]}} btn-lg ">{{$status_color[$collaborator['status']][0]}}
                            </x-button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="card">
            <div class="row justify-content-md-center">
                <div class="m-3 col-md-auto">
                    <a href="{{ route('show_register_welcome',['people' => $people['slug'], 'process' => $process] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Continuar</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
