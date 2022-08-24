<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if($company_people->company->products->count() == 0)
                    {{--Start Products--}}
                    <div class="container">
                        <div class="card mt-5">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="container d-block mt-2">
                                        <img class="img-fluid img-thumbnail-bg thumb-post"
                                             src="{{ asset('assets/images/rino/rino1-1.png') }}">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="card-header">
                                        <h4 class="card-title">Registra tus Productos</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Aún no tienes productos registrados, pero no te preocupes da clic en <b>Registrar
                                                Productos</b> y te guiaré por este proceso</p>

                                        <div class="mt-2 col-md-auto">
                                            <a href="{{ route('show_home_products',['people' => $company_people->slug] ) }}"
                                               class="btn btn-success  btn-lg shadow-lg  btn_guest ">Registrar Productos</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--End Products--}}
                @endif
            </div>
        </div>
    </div>
</div>
