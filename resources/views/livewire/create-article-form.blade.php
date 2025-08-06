<form wire:submit="store">
  @csrf
  @if (session()->has('success'))
      <div class="alert alert-success text-center mt-3">
        {{ session('success') }}
      </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">{{__('ui.titolo')}}:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id='title' wire:model.blur="title">
        @error('title')
        <p class="fs-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">{{__('ui.descrizione')}}:</label>
        <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
        @error('description')
        <p class="fs-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
     <label for="price" class="form-label">{{__('ui.prezzo')}}:</label>
        <input type="number" id='price' class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">
        @error('price')
        <p class="fs-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3"></div>
      <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror ">
        <option value="">{{__('ui.selezionaunacategoria')}}</option>
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{ __('ui.' . Str::slug($category->name)) }}</option>
        @endforeach
      </select>
      @error('category')
        <p class="fs-italic text-danger">{{$message}}</p>
        @enderror
    <div class="d-flex justify-content-center mt-3">
       <button type="submit" class="btn btn-dark">{{__('ui.crea')}}</button>
    </div>
</form>
