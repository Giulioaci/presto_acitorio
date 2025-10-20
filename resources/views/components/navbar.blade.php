
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container px-4">
 
    <a class="navbar-brand d-flex align-items-center" href="{{ route('homepage') }}">
      <i class="bi bi-cart-check fs-3 me-2"></i>
      Presto.it
    </a>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.Categorie') }}
          </a>
          <ul class="dropdown-menu">
            @foreach ($categories as $category)
              <li>
                <a class="dropdown-item" href="{{ route('byCategory', ['category' => $category]) }}">
                  {{ __('ui.' . Str::slug($category->name)) }}
                </a>
              </li>
              @if (!$loop->last)
                <hr class="dropdown-divider">
              @endif
            @endforeach
          </ul>
        </li>

        
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('ui.Hello') }}, {{ Auth::user()->name }}!
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                  Logout
                </a>
                <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
                  @csrf
                </form>
              </li>
              <li><a class="dropdown-item" href="{{ route('user.dashboard') }}">Area personale</a></li>
              </li>
            </ul>
          </li>
        @else
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('ui.Hello') }}, Ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.Registrati') }}</a></li>
              <li><a class="dropdown-item" href="{{ route('article.index') }}">{{ __('ui.AllArticles') }}</a></li>
            </ul>
          </li>
        @endauth

        
        @auth
          @if (Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="nav-link btn-sm position-relative w-sm-25" href="{{ route('revisor.index') }}">
                {{ __('ui.Revisore') }}
                <span class="position-absolute top-0 start-100 badge rounded-pill bg-danger">
                  {{ \App\Models\Article::toBeRevisedCount() }}
                </span>
              </a>
            </li>
          @endif
        @endauth
      </ul>

     <form class="d-flex ms-auto align-items-center search-form" role="search" action="{{ route('article.search') }}" method="GET">
     <input 
    type="search" 
    name="query" 
    class="search-input" 
    placeholder="{{ __('ui.Cercaarticolo') }}" 
    aria-label="search">
    <button type="submit" class="search-button">
    <i class="bi bi-search fs-5"></i>
    </button>
    </form>



      <x-_locale lang="it" />
      <x-_locale lang="en" />
      <x-_locale lang="es" />
    </div>
  </div>
</nav>
