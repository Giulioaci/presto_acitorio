<x-layout>
    <div class="parallax-section">
        <div class="container text-center py-5">

            {{-- Titolo --}}
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="py-3 display-1 mb-5 mt-2 text-white">
                        {{ __('ui.Inserisciiltuoarticolo') }}
                    </h1>
                </div>
            </div>

            {{-- Form --}}
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-6">
                    <div class="card-transparent p-4 shadow rounded">
                        <livewire:create-article-form />
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
