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
                <div class="row">
                    <div class="col col-sm-12">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-input id="name" class="form-control form-control-xl" type="text" name="name"
                                     :value="old('name')"
                                     placeholder="Nombre de tu Emprendimiento"
                                     required autofocus/>
                            <div class="form-control-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-12">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <label for="type_company">¿Tu emprendimiento esta registrado en la DIAN?</label>
                            <select id="type_company" class="form-control form-control-xl" name="type_company"
                                    placeholder="Tipo de Compañia"
                                    required autofocus>
                                <option value="entrepreneurship">NO</option>
                                <option value="business">SI</option>

                            </select>
                            <div class="form-control-icon mt-2">
                                <i class="bi bi-building"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-8">
                <div class="form-group position-relative has-icon-left mb-4">
                    <label for="description">Cuentanos una brebe descripcion de tu emprendimiento:</label>
                    <textarea id="description" class="form-control form-control-xl mt-1"
                              rows="3"
                              style="resize:none"
                              name="description"
                              placeholder="Describe tu emprendimiento"
                              required autofocus/></textarea>
                    <div class="form-control-icon">
                        <i class="bi bi-pencil"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <x-button data-toggle="tooltip" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>"
                          class="btn btn-primary  btn-lg shadow-lg  btn_guest mb-3">Registrar Compañia
                </x-button>
            </div>
        </div>
    </form>
</div>
