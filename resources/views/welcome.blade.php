<x-layout>
    <div class="container-fluid vh-300">
        <div class="row h-75 align-items-center justify-content-center mb-3">
            <div class="col-12 text-center">
              <h1 class="py-2 charming-title display-1">Shopping Online</h1>

                <div class="my-3">
                    <img src="{{ asset('storage/images/immagine.jpg') }}" alt="Descrizione immagine" class="img-fluid rounded shadow">
                </div>

                
                <div class="container my-5">
    <div class="row align-items-center justify-content-between">

        <div class="col-md-6 text-center mb-4 mb-md-0">
            <img src="{{ asset('storage/images/offerte.jpg') }}" alt="Offerte per il tuo business" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-6">
            <h2 class="py-3 charming-title">{{ __('ui.Scoprimigliaiadioffertesumisuraperiltuobusiness') }}</h2>
            <div class="row row-cols-2 g-4">
                <div class="col">
                    <h3 class="text-orange counter" data-target="200000000">0</h3> <!-- 200M+ -->
                    <p>{{ __('ui.prodotti') }}</p>
                </div>
                <div class="col">
                    <h3 class="text-orange counter" data-target="200000">0</h3> <!-- 200K+ -->
                    <p>{{ __('ui.fornitori') }}</p>
                </div>
                <div class="col">
                    <h3 class="text-orange counter" data-target="5900">0</h3> <!-- 5.900 -->
                    <p>{{ __('ui.categoriediprodotti') }}</p>
                </div>
                <div class="col">
                    <h3 class="text-orange counter" data-target="200">0</h3> <!-- 200+ -->
                    <p>{{ __('ui.Paesieregioni') }}</p>
                </div>
            </div>
        </div>

    </div>
</div>
                @if (session()->has('message'))
                    <div class="alert alert-success text-center shadow rounded w-50">
                        {{ session('message') }}
                    </div>
                @endif

                @if (session()->has('errorMessage'))
                    <div class="alert alert-danger text-center shadow rounded w-50">
                        {{ session('errorMessage') }}
                    </div>
                @endif
            </div>

            <div class="my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('storage/images/immaginelogin.png') }}" alt="Immagine secondaria" class="img-fluid rounded shadow">
                    </div>

                <div class="col-md-6">
                      <h3 class="charming-title">{{ __('ui.Piùdi50categorieperaiutartinellatuaricercaonline') }}</h3>
                    <ul class="shopping-list">
                         <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.Nonhaitempopercercareconfrontareapriremilleschedeeperdertitrasitituttiuguali') }}</li>
                         <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.SuPrestoittrovioltre50categoriepensatepersemplificartilavita.') }}</li>
                        <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.Sonoordinateaggiornateeprogettateperguidartiesattamentedovevuoiandaresenzasprechiditempo.') }}</li>
                    </ul>
                </div>
                <div class="container my-5">
    <div class="row align-items-center">
        
       <div class="container my-5">
    <div class="row align-items-stretch">
        
       
        <div class="col-md-6 mb-4 mb-md-0 text-center d-flex">
            <img src="{{ asset('storage/images/pox.png') }}" alt="Gestione semplificata" class="img-fluid rounded shadow w-100 object-fit-cover">
        </div>

        
        <div class="col-md-6 d-flex">
            <div class="row g-4 align-self-stretch w-100">
                
                
                <div class="col-12 col-sm-6">
                    <div class="p-3 shadow rounded bg-white h-100 d-flex flex-column">
                        <div class="mb-2 text-orange fs-3"><i class="bi bi-puzzle"></i></div>
                        <h5 class="fw-bold">Una sola interfaccia</h5>
                        <p class="mb-0 text-muted">da cui gestire tutti i marketplace e gli eCommerce, i fornitori ed i corrieri.</p>
                    </div>
                </div>

                
                <div class="col-12 col-sm-6">
                    <div class="p-3 shadow rounded bg-white h-100 d-flex flex-column">
                        <div class="mb-2 text-orange fs-3"><i class="bi bi-funnel-fill"></i></div>
                        <h5 class="fw-bold">Regole e filtri</h5>
                        <p class="mb-0 text-muted">per gestire la pubblicazione di migliaia di prodotti, il prezzo ed il margine di guadagno.</p>
                    </div>
                </div>

                
                <div class="col-12 col-sm-6">
                    <div class="p-3 shadow rounded bg-white h-100 d-flex flex-column">
                        <div class="mb-2 text-orange fs-3"><i class="bi bi-clock-history"></i></div>
                        <h5 class="fw-bold">Risparmi tempo</h5>
                        <p class="mb-0 text-muted">automatizzando la gestione di grandi volumi di prodotti, inserzioni e ordini.</p>
                    </div>
                </div>

                
                <div class="col-12 col-sm-6">
                    <div class="p-3 shadow rounded bg-white h-100 d-flex flex-column">
                        <div class="mb-2 text-orange fs-3"><i class="bi bi-speedometer2"></i></div>
                        <h5 class="fw-bold">Migliori le performance</h5>
                        <p class="mb-0 text-muted">implementando in modo semplice strategie di vendita specifiche.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-start">
        
        <div class="col-md-6 text-center mb-4 mb-md-0">
            <img src="{{ asset('storage/images/chisiamo.jpg') }}" alt="Chi siamo" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-start">
            <div>
                <h3 class="charming-title">Chi siamo</h3>
                <p class="d-flex">
                    <i class="bi bi-bag-fill text-orange me-2"></i>
                    <span class="flex-grow-1">
                        Siamo una piattaforma pensata per rivoluzionare il modo in cui le aziende fanno shopping online. 
                        Connettiamo fornitori e acquirenti in un ecosistema semplice, intuitivo e ricco di funzionalità avanzate. 
                        Il nostro obiettivo è facilitare ogni fase del processo di acquisto, offrendo strumenti intelligenti 
                        per risparmiare tempo, ottimizzare i costi e aumentare la competitività.
                        Implementando in modo semplice strategie di vendita specifiche.
                    </span>
                </p>

                <!-- Avatar centrato e più grande -->
                <div class="d-flex justify-content-center mt-4">
                    <img src="{{ asset('storage/images/saluto.png') }}" alt="Avatar" class="" style="width: 180px; height: 180px;">
                </div>
            </div>
        </div>
    </div>
</div>

            <h2 class="py-5 charming-title display-3">{{ __('ui.ultimiarticolicaricati') }}</h2>

            @if ($articles->count())
                <div id="articlesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        @foreach ($articles as $index => $article)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="d-flex justify-content-center">
                                    <div class="col-10 col-md-4 col-lg-3 py-5 charming-title">
                                        <x-card :article="$article" class="card-transparent" />
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#articlesCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#articlesCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @else
                <div class="col-12">
                    <h3 class="text-center py-5 charming-title">{{ __('ui.nonsonoancorastaticreatiarticoli') }}</h3>
                </div>
            @endif
        </div>
    </div>
</x-layout>









