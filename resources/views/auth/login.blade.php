<x-layout>
    <div class="parallax-section">
        <div class="container text-center py-5">
            {{-- Titolo --}}
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="-title display-1 mb-5 mt-2">{{ __('ui.Accedi') }}</h1>
                </div>
            </div>

            {{-- Form --}}
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="row">
                            <div class="col-6 py-3 -title">
                                <button type="submit" class="btn btn-dark">{{ __('ui.Accedi') }}</button>
                            </div>
                            <div class="col-6 py-3 -title">
                                <p><a href="{{ route('register') }}" class="btn btn-dark">{{ __('ui.Registrati') }}</a></p>
                            </div>
                        </div>
                    </form>

                    {{-- Icona --}}
                    <div class="text-center mt-4">
                        <i class="bi bi-bag-fill big-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

