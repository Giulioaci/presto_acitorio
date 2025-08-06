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
          <a class="nav-link" href="{{route ('homepage')}}">{{__('ui.Home')}}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{__('ui.Categorie')}}
          </a>
        <ul class="dropdown-menu">
          @foreach ($categories as $category)
          <li><a class="dropdown-item" href="{{ route('byCategory', ['category' => $category]) }}">{{ __('ui.' . Str::slug($category->name)) }}</a></li>
          @if (!$loop->last)
          <hr class="dropdown-divider">
          @endif
          @endforeach
       </ul>
       </li>
        @auth
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           {{__('ui.Hello')}},{{Auth::user()->name}}!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()";>Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
            </li>
          </ul>
        @else
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('ui.Hello')}}, Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">{{__('ui.Registrati')}}</a></li>
            <li><a class="dropdown-item" href="{{route('article.index')}}">{{__('ui.AllArticles')}}</a></li>
          </ul>
        </li>
        @endauth
          @auth
           @if (Auth::user()->is_revisor)
            <li class="nav-item">
            <a class="nav-link btn-sm position-relative w-sm-25"
               href="{{ route('revisor.index') }}">
               {{__('ui.Revisore')}}
               <span class="position-absolute top-0 start-100 badge rounded-pill bg-danger">
                    {{ \App\Models\Article::toBeRevisedCount() }}
               </span>
            </a>
            </li>
          @endif
        @endauth
      </ul>
    <form class="d-flex ms-auto" role="search" action="{{ route('article.search') }}" method="GET">
         <div class="input-group">
          <input type="search" name="query" class="form-control" placeholder="Search" aria-label="search">
          <button type="submit" class="input-group-text btn btn-primary" id="basic-addon2">
            {{__('ui.Cercaarticolo')}}
          </button>
         </div>
        </div>
      </form>
       <x-_locale lang="it" />
       <x-_locale lang="en" />
       <x-_locale lang="es" />
  </div>
</nav>