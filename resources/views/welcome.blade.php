<x-layout>
    <div class="parallax-section">
     <div class="">
            {{-- Sezione 1 --}}
            <div class="row justify-content-center g-0">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/images/1.jpg') }}"
                         class="img-fluid w-100 object-fit-cover"
                         style="height: 500px;"
                         alt="Immagine principale">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-white p-4"
                         style="background: rgba(0, 0, 0, 0.5);">
                        <h2 class="mb-4">{{ __('ui.Scoprimigliaiadioffertesumisuraperiltuobusiness') }}</h2>
                        <div class="row row-cols-2 g-4 text-white">
                            <div class="col">
                                <h3 class="counter" data-target="200000000">0</h3>
                                <p>{{ __('ui.prodotti') }}</p>
                            </div>
                            <div class="col">
                                <h3 class="counter" data-target="200000">0</h3>
                                <p>{{ __('ui.fornitori') }}</p>
                            </div>
                            <div class="col">
                                <h3 class="counter" data-target="5900">0</h3>
                                <p>{{ __('ui.categoriediprodotti') }}</p>
                            </div>
                            <div class="col">
                                <h3 class="counter" data-target="200">0</h3>
                                <p>{{ __('ui.Paesieregioni') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Sezione 2 --}}
            <div class="row justify-content-center g-0">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/images/1.jpeg') }}"
                         class="img-fluid w-100 object-fit-cover"
                         style="height: 500px;"
                         alt="Immagine secondaria">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-white p-4"
                         style="background: rgba(0, 0, 0, 0.5);">
                        <h3 class="mb-3">{{ __('ui.Piùdi50categorieperaiutartinellatuaricercaonline') }}</h3>
                        <ul class="shopping-list list-unstyled">
                            <li class="mb-2"><i class="bi bi-bag-fill me-2"></i>{{ __('ui.Nonhaitempopercercareconfrontareapriremilleschedeeperdertitrasitituttiuguali') }}</li>
                            <li class="mb-2"><i class="bi bi-bag-fill me-2"></i>{{ __('ui.SuPrestoittrovioltre50categoriepensatepersemplificartilavita.') }}</li>
                            <li class="mb-2"><i class="bi bi-bag-fill me-2"></i>{{ __('ui.Sonoordinateaggiornateeprogettateperguidartiesattamentedovevuoiandaresenzasprechiditempo.') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Gestione semplificata --}}
            <div class="row justify-content-center g-0">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/images/3.jpg') }}"
                         class="img-fluid w-100 object-fit-cover"
                         style="height: 500px;"
                         alt="Gestione semplificata">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center p-4"
                         style="background: rgba(0, 0, 0, 0.6);">
                        <div class="row w-100 text-white g-4">
                            @foreach ([
                                ['icon' => 'puzzle', 'title' => 'Una sola interfaccia', 'text' => 'da cui gestire tutti i marketplace e gli eCommerce, i fornitori ed i corrieri.'],
                                ['icon' => 'funnel-fill', 'title' => 'Regole e filtri', 'text' => 'per gestire la pubblicazione di migliaia di prodotti, il prezzo ed il margine di guadagno.'],
                                ['icon' => 'clock-history', 'title' => 'Risparmi tempo', 'text' => 'automatizzando la gestione di grandi volumi di prodotti, inserzioni e ordini.'],
                                ['icon' => 'speedometer2', 'title' => 'Migliori le performance', 'text' => 'implementando in modo semplice strategie di vendita specifiche.']
                            ] as $item)
                                <div class="col-12 col-md-6">
                                    <div class="p-3 shadow rounded bg-white bg-opacity-75 text-black h-100 d-flex flex-column">
                                        <div class="mb-2 fs-3"><i class="bi bi-{{ $item['icon'] }}"></i></div>
                                        <h5 class="fw-bold">{{ $item['title'] }}</h5>
                                        <p class="mb-0">{{ $item['text'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Chi siamo --}}
            <div class="row justify-content-center g-0">
                <div class="col-12 position-relative">
                    <img src="{{ asset('storage/images/4.jpg') }}"
                         class="img-fluid w-100 object-fit-cover"
                         style="height: 500px;"
                         alt="Chi siamo">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center text-white p-4"
                         style="background: rgba(0, 0, 0, 0.6);">
                        <h3 class="mb-3">Chi siamo</h3>
                        <p class="d-flex">
                            <i class="bi bi-bag-fill me-2 fs-4"></i>
                            <span>
                                Siamo una piattaforma pensata per rivoluzionare il modo in cui le aziende fanno shopping online.
                                Connettiamo fornitori e acquirenti in un ecosistema semplice, intuitivo e ricco di funzionalità avanzate.
                                Il nostro obiettivo è facilitare ogni fase del processo di acquisto, offrendo strumenti intelligenti
                                per risparmiare tempo, ottimizzare i costi e aumentare la competitività.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


























