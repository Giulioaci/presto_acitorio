<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">Presto.it</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('homepage')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorie
          </a>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
          <li><a class="dropdown-item" href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a></li>
          @if (!$loop->last)
          <hr class="dropdown-divider">
          @endif
          @endforeach
       </ul>
       </li>
        @auth
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao,{{Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()";>Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
            </li>
          </ul>
        @else
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('create.article')}}">Crea un articolo</a></li>
            <li><a class="dropdown-item" href="{{route('article.index')}}">Tutti gli articoli</a></li>
          </ul>
        </li>
        @endauth
          @auth
           @if (Auth::user()->is_revisor)
            <li class="nav-item">
            <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25"
               href="{{ route('revisor.index') }}">
               Revisore
               <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ \App\Models\Article::toBeRevisedCount() }}
               </span>
            </a>
            </li>
          @endif
        @endauth
      </ul>
    </div>
  </div>
</nav>