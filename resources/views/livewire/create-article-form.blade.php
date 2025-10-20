<div class="root-container"> 
    <form wire:submit="store">
        @csrf
        @if (session()->has('success'))
            <div class="alert alert-success text-center mt-3">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('ui.titolo') }}:</label>
            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" wire:model.blur="title">
            @error('title')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">{{ __('ui.descrizione') }}:</label>
            <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
            @error('description')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('ui.prezzo') }}:</label>
            <input type="number" id="price" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">
            @error('price')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="temporary_images" class="form-label">{{ __('ui.immagini') }}:</label>
            <input type="file" id="temporary_images" wire:model.live="temporary_images" multiple
                   class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
            @error('temporary_images.*')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            @error('temporary_images')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>{{ __('ui.anteprimaimmagini') }}:</p>
                    <div class="">
                        @foreach ($images as $key => $image)
                            <div class="col d-flex flex-column align-items-center my-3">
                                <div class="img-preview mx-auto shadow rounded"
                                     style="background-image: url({{ $image->temporaryUrl() }});">
                                </div>
                                <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})">X</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <div class="mb-3">
            <label for="category" class="form-label">{{ __('ui.selezionaunacategoria') }}:</label>
            <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                <option value="">{{ __('ui.selezionaunacategoria') }}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ __('ui.' . Str::slug($category->name)) }}</option>
                @endforeach
            </select>
            @error('category')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="justify-content-center py-5 -title">
            <button type="submit" class="btn btn-dark">{{ __('ui.crea') }}</button>
        </div>
    </form>
</div>

