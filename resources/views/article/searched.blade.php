<x-layout>
    <div class="parallax-section">
        <div class="container text-center py-5">

            {{-- Titolo ricerca --}}
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="py-5 display-1 mb-5 mt-2">
                        {{ __('ui.Risultatiperlaricerca') }}
                        "<span class="fst-italic">{{ $query }}</span>"
                    </h1>
                </div>
            </div>

            {{-- Lista articoli --}}
            <div class="row justify-content-center align-items-center py-5">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-3 py-5">
                        <div class="card-transparent p-3 shadow rounded">
                            <x-card :article="$article" />
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <h3 class="py-5 ">
                            {{ __('ui.Nessunarticolocorrispondeallatuaricerca') }}
                        </h3>
                    </div>
                @endforelse
            </div>

            {{-- Paginazione --}}
            <div class="d-flex justify-content-center">
                <div>
                    {{ $articles->links() }}
                </div>
            </div>

        </div>
    </div>
</x-layout>

