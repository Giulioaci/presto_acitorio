<x-layout>
    <div class="parallax-section">
        <div class="container text-center py-5">
            {{-- Titolo --}}
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="charming-title display-1 mb-5 mt-2">{{ __('ui.Registrati') }}</h1>
                </div>
            </div>

            {{-- Form registrazione --}}
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome Utente:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        <div class="row">
                            <div class="col-6 py-3 charming-title">
                                <button type="submit" class="btn btn-dark">{{ __('ui.Registrati') }}</button>
                            </div>
                            <div class="col-6 py-3 charming-title">
                                <p><a href="{{ route('login') }}" class="btn btn-dark">Login!</a></p>
                            </div>
                        </div>
                    </form>

                    {{-- Icona --}}
                    <div class="text-center mt-4">
                        <i class="bi bi-cart-check-fill big-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

