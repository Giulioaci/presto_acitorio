<x-layout>
    <div class="container-fluid">
        <div class="row h-75 align-items-center justify-content-center mb-3">
            <div class="col-12 text-center">
                <h1 class="display-4">Presto.it</h1>

                @auth
                    <a class="btn btn-dark mt-3" href="{{ route('create.article') }}">Pubblica un articolo</a>
                @endauth
            </div>
        </div>
    </div>
</x-layout>

