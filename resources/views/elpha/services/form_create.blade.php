@include('layouts.partials.errors')
<div class="card mt-5">
    <form method="POST" action="{{ route('elpha_create_services', ['people' => $people['slug']]) }}"
          enctype="multipart/form-data">
        @csrf
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-12 col-md-10 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="movement_name">Tipo de Servicio</label>
                    <select id="movement_name" class="form-control form-control-xl mt-2" name="movement_name"
                            required="required"
                            autofocus>
                        @foreach($movement->movement_names as $key => $type)
                            <option value={{$type['id']}}>{{$type['name']}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-12 col-md-10 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="payment_method">Tipo de Pago</label>
                    <select id="payment_method" class="form-control form-control-xl mt-2" name="payment_method"
                            required="required"
                            autofocus>
                        @foreach($payment_methods as $key => $type)
                            <option value={{$type['id']}}>{{$type['name']}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-8 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="service_description">Descripcion</label>
                    <textarea id="service_description" class="form-control form-control-xl mt-2 " type="text"
                              name="service_description" rows="3" style="resize: none;"
                              :value="old('service_description_extern')" autocomplete="on"
                              autofocus></textarea>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-8 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="amount">Monto</label>
                    <x-input id="amount" class="form-control form-control-xl mt-2 " type="number"
                             name="amount"
                             :value="old('amount')" autocomplete="on"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-8 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="registration_date">Fecha de Registro</label>
                    <x-input id="registration_date" class="form-control form-control-xl mt-2 " type="date"
                             name="registration_date"
                             :value="old('registration_date')" autocomplete="on"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-8 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="payment_invoice">Factura</label>
                    <x-input id="payment_invoice" class="form-control form-control-xl mt-2 " type="text"
                             name="payment_invoice"
                             :value="old('payment_invoice')" autocomplete="on"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-8 offset-md-2">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="payment_recipient">Destinatario</label>
                    <x-input id="payment_recipient" class="form-control form-control-xl mt-2 " type="text"
                             name="payment_recipient"
                             :value="old('payment_recipient')" autocomplete="on"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <input id="movement_type"  type="hidden"
               name="movement_type"
               value={{$movement->id}}>

        <div class="row justify-content-md-center">
            <div class="col-md-auto text-center">
                <input type="hidden" value="{{$people['slug']}}" name="people">
                <x-button data-toggle="tooltip" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                          class="btn btn-primary  btn-lg shadow-lg  btn_guest mb-3">Continuar
                </x-button>
            </div>
        </div>
    </form>
</div>
