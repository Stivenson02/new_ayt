

@include('layouts.partials.errors')

<div class="card mt-5">
    <form method="post" action="{{ route('register_company_complements', ['people' => $people->slug]) }}" enctype="multipart/form-data">

        @csrf
        <div class="row mx-4 mt-2">
            <div class="col col-sm-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="type_company">Nombre</label>
                    <span class="form-control form-control-xl">{{$company->name}}</span>
                </div>
            </div>
            <div class="col col-sm-3">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="document">RUT</label>
                    <x-input id="document" class="form-control form-control-xl" type="number" name="document"
                             :value="old('document')"
                             autocomplete="off"/>
                    <div class="form-control-icon mt-2">
                        <i class="bi bi-book"></i>
                    </div>
                </div>
            </div>
            <div class="col col-sm-1">
                <label for="type_company"></label>
                <span class="form-control form-control-xl text-center"><b>-</b></span>
            </div>
            <div class="col col-sm-2">
                <div class="form-group position-relative has-icon-left mb-2">
                    <label for="verification"></label>
                    <x-input id="verification" class="form-control form-control-xl" type="number" name="verification"
                             :value="old('verification')"
                             autocomplete="off"
                             maxlength="1"/>
                </div>
            </div>
            <div class="col col-sm-3">
                <div class="form-group position-relative has-icon-left mb-2">
                    <label for="type_company">Logo</label>
                    <x-input id="img_logo" class="form-control form-control-xl" type="file" name="img_logo"
                             accept="image/png, image/jpg, image/jpeg"
                              autofocus/>

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
