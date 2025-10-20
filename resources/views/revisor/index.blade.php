<x-layout>
    <div class="parallax-section py-5 text-white">
        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        <div class="container-fluid pt-5">
            <div class="row py-5 justify-content-center align-items-center text-center">
                <div class="col-3">
                    <h1 class="py-4 -title">Revisor dashboard</h1>
                </div>

                @if ($article_to_check)
                    <div class="row justify-content-center pt-5">
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                {{-- immagini articolo --}}
                            </div>
                        </div>

                        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                            {{-- dettagli articolo e pulsanti --}}
                        </div>
                    </div>
                @else
                    <div class="row justify-content-center align-items-center height-custom text-center">
                        <div class="col-12">
                            <h1 class="py-4 -title">{{ __('ui.nessunarticolodarevisionare') }}</h1>
                            <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">{{ __('ui.tornaallhomepage') }}</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="text-center mt-4">
            <i class="bi bi-credit-card" style="font-size: 13rem;"></i>
        </div>
    </div>
</x-layout>



