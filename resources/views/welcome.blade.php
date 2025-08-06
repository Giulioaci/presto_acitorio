<x-layout>
    <div class="container-fluid vh-300">
        <div class="row h-75 align-items-center justify-content-center mb-3">
            <div class="col-12 text-center">
                <h1 class="display-4">Presto.it</h1>

                @if (session()->has('message'))
                 <div class="alert alert-success text-center shadow rounded w-50">
                 {{ session('message') }}
                 </div>
                @endif

                @if (session()->has('errorMessage'))
                 <div class="alert alert-danger text-center shadow rounded w-50">
                 {{ session('errorMessage') }}
                 </div>
                @endif

                @auth
                    <a class="btn btn-dark mt-3" href="{{ route('create.article') }}">{{__('ui.Publicaunarticolo')}}</a>
                @endauth
            </div>
            <div class="row height-custom justify-content-center align-items-center py-5">
              @forelse ($articles as $article)
            <div class="col-12 col-md-3 ">
               <x-card :article="$article" />
            </div>
              @empty
             <div class="col-12">
              <h3 class="text-center">
            {{__('ui.nonsonoancorastaticreatiarticoli')}}
              </h3>
            </div>
             @endforelse
            </div>
        </div>
    </div>
</x-layout>

