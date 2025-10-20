<x-layout>
  <div class="parallax-section">
    <div class="container text-center py-5">
      
      {{-- Titolo categoria --}}
      <div class="row justify-content-center align-items-center">
        <div class="col-12 pt-5">
          <h1 class="py-5 charming-title display-1 mb-5 mt-2">
            {{ __('ui.Articolidellacategoria') }}
            <span class="fst-italic fw-bold">{{ __('ui.' . Str::slug($category->name)) }}</span>
          </h1>
        </div>
      </div>

      {{-- Lista articoli --}}
      <div class="row justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
          <div class="col-12 col-md-3 py-5 charming-title">
            <x-card :article="$article" class="card-transparent" />
          </div>
        @empty
          <div class="py-5 charming-title">
            <h3>{{ __('ui.Nonsonoancorastaticreatiarticoliperquestacategoria!') }}</h3>
            <a class="btn btn-dark my-5" href="{{ route('create.article') }}">
              {{ __('ui.Pubblicaunarticolo') }}
            </a>
          </div>
        @endforelse
      </div>

    </div>
  </div>
</x-layout>


