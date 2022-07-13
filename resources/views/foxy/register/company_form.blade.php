<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<div class="card mt-5">
    <form method="POST" action="{{ route('company') }}">
        @csrf
        <div class="row m-4">
            <div class="col col-lg-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <x-input id="name" class="form-control form-control-xl" type="text" name="name" :value="old('name')"
                             placeholder="Nombre de Usuario"
                             required autofocus/>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <x-input id="name" class="form-control form-control-xl" type="text" name="name" :value="old('name')"
                             placeholder="Nombre de Usuario"
                             required autofocus/>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="form-group position-relative has-icon-left mb-4">
                    <x-input id="name" class="form-control form-control-xl" type="text" name="name" :value="old('name')"
                             placeholder="Nombre de Usuario"
                             required autofocus/>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <x-button data-toggle="tooltip" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>" class="btn btn-primary  btn-lg shadow-lg  btn_guest">Registrar Compañia</x-button>
            </div>
        </div>
    </form>
</div>
