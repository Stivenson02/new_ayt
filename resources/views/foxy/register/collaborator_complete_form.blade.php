@include('layouts.partials.errors')
<div class="card mt-5">
    <form method="POST" action="{{ route('update_register_update_collaborator', ['people' => $people->slug]) }}">
        @csrf


        <div class="row mx-4 mt-4">
            <div class="col col-xs-12 col-sm-12 col-md-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="first_name">Primer Nombre</label>
                    <input id="first_name" class="form-control form-control-xl" type="text" name="first_name"
                           value='{{$stakeholder['first_name']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="second_name">Segundo Nombre</label>
                    <input id="second_name" class="form-control form-control-xl" type="text" name="second_name"
                           value='{{$stakeholder['second_name']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="first_last_name">Primer Apellido</label>
                    <input id="first_last_name" class="form-control form-control-xl" type="text"
                           name="first_last_name"
                           value='{{$stakeholder['first_last_name']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="second_last_name">Segundo Apellido</label>
                    <input id="second_last_name" class="form-control form-control-xl" type="text"
                           name="second_last_name"
                           value='{{$stakeholder['second_last_name']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="address">Direccion</label>
                    <input id="address" class="form-control form-control-xl" type="text" name="address"
                           value='{{$stakeholder['address']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-house-fill"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="type_document">Tipo de Documento</label>
                    <select id="type_document" class="form-control form-control-xl" name="type_document"
                            autofocus>
                        @foreach($type_documents as $key => $type)
                            <option value={{$key}}>{{$type}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="document">Numero de Identificacion</label>
                    <input id="document" class="form-control form-control-xl" type="number" name="document"
                           value='{{$stakeholder['document']}}'
                           autofocus/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="city">Ciudad</label>
                            <select id="city" class="form-control form-control-xl" name="city"
                                    autofocus>
                                @foreach($cities as $key => $type)
                                    <option value={{$type['id']}}>{{$type['full_name']}}</option>
                                @endforeach
                            </select>
                            <div class="form-control-icon mt-2">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <x-button data-toggle="tooltip" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                          class="btn btn-primary  btn-lg shadow-lg  btn_guest mb-3">Continuar
                </x-button>
            </div>
        </div>
    </form>
</div>
