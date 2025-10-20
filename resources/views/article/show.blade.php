<x-layout>
    <div class="parallax-section py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center py-5">

                {{-- Carousel immagine --}}
                <div class="col-12 col-md-6 mb-3 d-flex align-items-center">
                    @if ($article->images->count() > 0)
                        <div id="carouselExample" class="carousel slide w-100">
                            <div class="carousel-inner">
                                @foreach ($article->images as $key => $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ $image->getUrl(1000,1000) }}" class="d-block w-100 rounded shadow"
                                             alt="Immagine {{ $key + 1 }} dell’articolo {{ $article->title }}">
                                    </div>
                                @endforeach
                            </div>
                            @if ($article->images->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    @else
                        <img src="https://picsum.photos/400" alt="Nessuna foto inserita dall’utente" class="img-fluid rounded shadow">
                    @endif
                </div>

                {{-- Contenuto articolo --}}
                <div class="col-12 col-md-6 mb-3 d-flex flex-column justify-content-center text-center">
                    <h2 class="display-5">{{ $article->title }}</h2>

                    <div class="mb-3">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-black fs-4 mx-1"></i>
                        @endfor
                    </div>

                    <h4 class="fw-bold">{{ __('ui.prezzo') }}: {{ $article->price }} €</h4>
                    <h5>{{ __('ui.descrizione') }}:</h5>
                    <p>{{ $article->description }}</p>

                    <form action="" method="POST" class="mt-4 px-3">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="message" class="form-label fw-bold">Scrivi un messaggio al venditore:</label>
                            <textarea name="message" id="message" class="form-control" rows="3"
                                      placeholder="Ciao, sono interessato all’articolo..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia Messaggio</button>
                    </form>

                    <div class="justify-content-center gap-3 mt-4 flex-wrap">
                        <a href="#" class="btn btn-danger btn-dark">Acquista</a>
                        <form action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-dark">
                                <i class="bi bi-heart"></i> Salva nei preferiti
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Area Recensioni --}}
                <div class="col-12 mt-5">
                    <h3 class="mb-4 text-center">{{ __('Recensioni degli utenti') }}</h3>

                    {{-- Lista recensioni --}}
                    <div class="list-group mb-4">
                            <div class="list-group-item list-group-item-action mb-2 rounded shadow-sm">
                                <div class="d-flex justify-content-between align-items-center mb-2">

                            <p class="text-center text-muted">Ancora nessuna recensione per questo articolo.</p>
                    </div>

                    {{-- Form per nuova recensione --}}
                    @auth
                        <form action="" method="POST" class="mb-5">
                            @csrf
                            <h5>Scrivi una recensione</h5>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Valutazione</label>
                                <select name="rating" id="rating" class="form-select" required>
                                    <option value="">Seleziona...</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Commento</label>
                                <textarea name="comment" id="comment" class="form-control" rows="3" placeholder="Scrivi qui la tua recensione..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Invia Recensione</button>
                        </form>
                    @else
                        <p class="text-center">Devi <a href="{{ route('login') }}">accedere</a> per scrivere una recensione.</p>
                    @endauth
                </div>

            </div>
        </div>
    </div>
</x-layout>



      
