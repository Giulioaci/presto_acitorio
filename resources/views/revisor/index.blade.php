<x-layout>
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
                <div>
                    <h1 class="py-4 charming-title">
                        Revisor dashboard
                    </h1>
                </div>
            </div>

            @if ($article_to_check)
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            @if ($article_to_check->images->count())
                                @foreach ($article_to_check->images as $key => $image)
                                    <div class="col-6 col-md-4 mb-4 text-center">
                                        <img src="{{ $image->getUrl(1000, 1000) }}" class="img-fluid rounded shadow"
                                            alt="Immagine {{ $key + 1 }} dell’articolo '{{ $article_to_check->title }}'">

                                        {{-- SafeSearch Ratings --}}
                                        <div class="mt-3">
                                            <h6 class="fw-bold">Ratings</h6>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-10 text-center">adult</div>
                                            </div>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-10 text-center">violence</div>
                                            </div>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-10 text-center">spoof</div>
                                            </div>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-10 text-center">racy</div>
                                            </div>

                                            <div class="row justify-content-center align-items-center">
                                                <div class="col-10 text-center">medical</div>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <h6 class="fw-bold">Labels</h6>
                                            @if ($image->labels && count($image->labels))
                                                <ul class="list-unstyled small">
                                                    @foreach ($image->labels as $label)
                                                        <li>• {{ $label }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p class="fst-italic text-muted">No labels</p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @for ($i = 0; $i < 6; $i++)
                                    <div class="col-6 col-md-4 mb-4 text-center">
                                        <img src="https://picsum.photos/300" alt="immagine segnaposto"
                                            class="img-fluid rounded shadow">
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>

                    <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                        <h1>{{ $article_to_check->title }}</h1>
                        <h3>Autore: {{ $article_to_check->user->name }}</h3>
                        <h4>{{ $article_to_check->price }}€</h4>
                        <h4 class="fst-italic text-muted">
                            {{ $article_to_check->category ? __('ui.' . Str::slug($article_to_check->category->name)) : __('ui.senza_categoria') }}
                        </h4>
                        <p class="h6">{{ $article_to_check->description }}</p>

                        <div class="d-flex pb-4 justify-content-around">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 px-5 fw-bold">{{ __('ui.rifiuta') }}</button>
                            </form>

                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 px-5 fw-bold">{{ __('ui.accetta') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="row justify-content-center align-items-center height-custom text-center">
                    <div class="col-12">
                        <h1 class="py-4 charming-title">{{ __('ui.nessunarticolodarevisionare') }}</h1>
                        <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">{{ __('ui.tornaallhomepage') }}</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="text-center mt-4">
        <i class="bi bi-credit-card" style="font-size: 13rem;"></i>
    </div>
</x-layout>


