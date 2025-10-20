<x-layout>
    <div class="parallax-section d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 charming-title">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-header bg-dark text-white text-center rounded-top charming-title">
                            <h3 class="mb-0">Area Personale</h3>
                        </div>
                        <div class="card-body text-center">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0D8ABC&color=fff&size=120" 
                                 alt="Avatar" class="rounded-circle mb-3">
                            <h4 class="fw-bold">{{ $user->name }}</h4>
                            <p class="text-muted mb-4">{{ $user->email }}</p>
                            <div class="d-flex justify-content-center gap-3 flex-wrap">
                                <a href="{{ route('create.article') }}" class="btn btn-dark text-white">
                                    <i class="bi bi-plus-circle me-1"></i> Pubblica un articolo
                                </a>
                                <a href="{{ route('article.my') }}" class="btn btn-dark text-white">
                                    <i class="bi bi-list-ul me-1"></i> I miei articoli caricati
                                </a>
                                @if ($user->is_revisor)
                                    <a href="{{ route('revisor.index') }}" class="btn btn-dark text-white">
                                        <i class="bi bi-shield-check me-1"></i> Area Revisore
                                    </a>
                                @endif
                                <a href="" class="btn btn-dark text-white">
                                        <i class="bi bi-list-ul me-1"></i> I miei articoli preferiti
                                    </a>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-light rounded-bottom">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-bag-heart-fill big-icon"></i>
                </div>
            </div>
        </div>
    </div>
</x-layout>

