<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-dark">Dettaglio</a>

            @if ($article->category)
                <a href="{{ route('byCategory', ['category' => $article->category->id]) }}" class="btn btn-dark">
                    {{ $article->category->name }}
                </a>
            @else
                <span class="btn btn-outline-secondary disabled">Senza categoria</span>
            @endif
        </div>
    </div>
</div>

