<x-layout>
  <div class="parallax-section">
    <div class="container-fluid text-center py-5">
      {{-- Titolo --}}
      <div class="row height-custom justify-content-center align-items-center">
        <div class="col-12">
          <h1 class="charming-title display-1 mb-5 mt-2">{{ __('ui.AllArticles') }}</h1>
        </div>
      </div>

      {{-- Lista articoli --}}
      <div class="row height-custom justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
          <div class="col-12 col-md-3 py-5 charming-title">
            <x-card :article="$article" />
          </div>
        @empty
          <div class="col-12">
            <h3 class="text-center">
              Non sono ancora stati creati articoli
            </h3>
          </div>
        @endforelse
      </div>

      {{-- Paginazione --}}
      <div class="d-flex justify-content-center mt-4">
        <div>
          {{ $articles->links() }}
        </div>
      </div>
    </div>
  </div>
</x-layout>

