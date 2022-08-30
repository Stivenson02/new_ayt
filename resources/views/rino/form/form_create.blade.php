@include('layouts.partials.errors')
<div class="card mt-5">
    <form method="POST" action="{{ route('rino_create_products', ['people' => $people['slug']]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="type_product">Tipo de Producto</label>
                    <select id="type_product" class="form-control form-control-xl mt-2" name="type_product" required="required"
                            autofocus>
                        <option value="">Selecciona un tipo</option>
                        <option value="0">Otro</option>
                        @foreach($products_types as $key => $type)
                            <option value={{$type['id']}}>{{$type['name']}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-8">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="other_type">Si escogiste Otro, escribe en este espacio que otro tipo manejas</label>
                    <x-input id="other_type" class="form-control form-control-xl mt-2 " type="text" name="other_type"
                             :value="old('email')" autocomplete="off"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4 mt-2">
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="product_name">Nombre del producto</label>
                    <x-input id="product_name" class="form-control form-control-xl mt-2 " type="text" name="product_name"
                             :value="old('email')" autocomplete="on"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </div>
            <div class="col col-xs-12 col-sm-12 col-md-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="type_company">Foto o img de tu producto</label>
                    <x-input id="img_product" class="form-control form-control-xl" type="file" name="img_product"
                             accept="image/png, image/jpg, image/jpeg"
                             autofocus/>
                    <div class="form-control-icon mt-3">
                        <i class="bi bi-card-checklist"></i>
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
