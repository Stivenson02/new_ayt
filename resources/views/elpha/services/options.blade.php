<x-foxy-layout>
    <div class="container">
        <div class="card mt-5">
            <div class="row">
                <div class="col-sm">
                    <div class="container d-block mt-2">
                        <img class="img-fluid-elpha img-thumbnail-bg mx-5 "
                             src="{{ asset('assets/images/elpha/elpha1-1.png') }}">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="card-header">
                        <h4 class="card-title">Tipos de movimiento</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Indica el tipo de movimiento que registraras
                        </p>
                        @foreach( $movements as $movement)
                            <div class="row justify-content-md-center">
                                <div class="text-center m-3 col-ms-auto">
                                    <a href="{{ route('show_elpha_form_services',['people' => $people['slug'], 'movement_id' => $movement->id] ) }}"
                                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">{{$movement['accounting_name']}} / {{$movement['friendly_name']}} </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row justify-content-md-center">
                <div class="text-center m-3 col-ms-auto">
                    <a href="{{ route('home_elpha_services',['people' => $people['slug']] ) }}"
                       class="btn btn-success  btn-lg shadow-lg  btn_guest ">Volver a Servicios</a>
                </div>
            </div>
        </div>
    </div>
</x-foxy-layout>
