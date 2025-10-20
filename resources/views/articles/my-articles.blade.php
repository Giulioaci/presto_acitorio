<x-layout>
    <div class="parallax-section py-5">
        <div class="container my-5">
            <h2 class="charming-title mb-4">I miei articoli</h2>

            @if($articles->isEmpty())
                <p class="text-center text-muted">Non hai ancora pubblicato articoli.</p>
            @else
                <ul class="list-group charming-title">
                    @foreach($articles as $article)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">{{ $article->title }}</h5>
                                <p class="mb-1 text-muted">{{ Str::limit($article->body, 100) }}</p>
                            </div>
                            <a href="{{ route('article.show', $article) }}" class="btn btn-sm btn-dark">
                                Dettagli
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="text-center mt-4">
            <i class="bi bi-cart-check-fill" style="font-size: 13rem;"></i>
        </div>
    </div>
</x-layout>




