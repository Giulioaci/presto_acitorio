<x-layout>
    {{-- Stile per maggiore spaziatura tra sezioni --}}
   
    {{-- Sezione parallax estesa --}}
    <div class="parallax-section">
        <div class="container text-center py-5">
            <h1 class="charming-title display-1 custom-title-spacing">Shopping Online</h1>

            {{-- Blocco principale: immagine e testo --}}
            <div class="row justify-content-center align-items-center g-4 section-spacing">
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('storage/images/immagine.jpg') }}" 
                         class="img-fluid rounded-top-4 shadow img-fade" 
                         style="height: 300px; object-fit: cover;" 
                         alt="Immagine principale">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="py-3 charming-title">{{ __('ui.Scoprimigliaiadioffertesumisuraperiltuobusiness') }}</h2>
                    <div class="row row-cols-2 g-4">
                        <div class="col">
                            <h3 class="text-orange counter" data-target="200000000">0</h3>
                            <p>{{ __('ui.prodotti') }}</p>
                        </div>
                        <div class="col">
                            <h3 class="text-orange counter" data-target="200000">0</h3>
                            <p>{{ __('ui.fornitori') }}</p>
                        </div>
                        <div class="col">
                            <h3 class="text-orange counter" data-target="5900">0</h3>
                            <p>{{ __('ui.categoriediprodotti') }}</p>
                        </div>
                        <div class="col">
                            <h3 class="text-orange counter" data-target="200">0</h3>
                            <p>{{ __('ui.Paesieregioni') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Altri blocchi immagine + testo --}}
            <div class="row align-items-center section-spacing">
                <div class="col-md-6 d-flex align-items-center">
                    <img src="{{ asset('storage/images/immaginelogin.png') }}" 
                         class="img-fluid rounded-top-4 shadow img-fade" 
                         style="height: 300px; object-fit: cover;" 
                         alt="Immagine secondaria">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h3 class="charming-title">{{ __('ui.Piùdi50categorieperaiutartinellatuaricercaonline') }}</h3>
                    <ul class="shopping-list">
                        <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.Nonhaitempopercercareconfrontareapriremilleschedeeperdertitrasitituttiuguali') }}</li>
                        <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.SuPrestoittrovioltre50categoriepensatepersemplificartilavita.') }}</li>
                        <li><i class="bi bi-bag-fill text-orange me-2"></i>{{ __('ui.Sonoordinateaggiornateeprogettateperguidartiesattamentedovevuoiandaresenzasprechiditempo.') }}</li>
                    </ul>
                </div>
            </div>

            {{-- Gestione semplificata --}}
            <div class="row align-items-stretch section-spacing">
    {{-- Colonna immagine --}}
    <div class="col-md-6 d-flex align-items-stretch">
        <img src="{{ asset('storage/images/pox.png') }}" 
             class="img-fluid rounded-top-4 shadow img-fade w-100 h-100 object-fit-cover" 
             alt="Gestione semplificata">
    </div>

    {{-- Colonna blocchi --}}
    <div class="col-md-6 d-flex">
        <div class="row g-4 align-self-stretch w-100 h-100">
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


         {{-- Chi siamo --}}
<div class="row align-items-stretch section-spacing">
    {{-- Colonna immagine --}}
    <div class="col-md-6 d-flex align-items-stretch">
        <img src="{{ asset('storage/images/chisiamo.jpg') }}" 
             class="img-fluid rounded-top-4 shadow img-fade w-100 h-100 object-fit-cover" 
             alt="Chi siamo">
    </div>

    {{-- Colonna testo + avatar --}}
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <div class="d-flex flex-column justify-content-between h-100 p-3">
            <div>
                <h3 class="charming-title">Chi siamo</h3>
                <p class="d-flex mt-3">
                    <i class="bi bi-bag-fill text-orange me-2"></i>
                    <span class="flex-grow-1">
                        Siamo una piattaforma pensata per rivoluzionare il modo in cui le aziende fanno shopping online. 
                        Connettiamo fornitori e acquirenti in un ecosistema semplice, intuitivo e ricco di funzionalità avanzate. 
                        Il nostro obiettivo è facilitare ogni fase del processo di acquisto, offrendo strumenti intelligenti 
                        per risparmiare tempo, ottimizzare i costi e aumentare la competitività.
                    </span>
                </p>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <img src="{{ asset('storage/images/saluto.png') }}" 
                     alt="Avatar" 
                     class="img-fade" 
                     style="width: 180px; height: 180px;">
            </div>
        </div>
    </div>
</div>


            {{-- Carousel articoli --}}
            <h2 class="py-5 charming-title display-3 text-center section-spacing">{{ __('ui.ultimiarticolicaricati') }}</h2>

            @if ($articles->count())
                <div id="articlesCarousel" class="carousel slide section-spacing" data-bs-ride="carousel" data-bs-interval="1500">
                    <div class="carousel-inner">
                        @foreach ($articles as $index => $article)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="col-10 col-md-4 col-lg-3 py-5 charming-title">
                                        <x-card :article="$article" class="card-transparent" />
                                    </div>

                                    <div class="text-center mb-3 rating-stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $article->rating)
                                                <i class="bi bi-star-fill text-warning fs-4 mx-1"></i>
                                            @else
                                                <i class="bi bi-star-fill text-warning fs-4 mx-1"></i>
                                            @endif
                                        @endfor
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
                <div class="col-12 section-spacing">
                    <h3 class="text-center py-5 charming-title">{{ __('ui.nonsonoancorastaticreatiarticoli') }}</h3>
                </div>
            @endif
        </div>
    </div>
</x-layout>
























