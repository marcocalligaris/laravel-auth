@if($post->exists)
<form action="{{ route('admin.posts.update', $post) }}" method="POST">
    @method('PUT')
@else
<form action="{{ route('admin.posts.store') }}" method="POST">

@endif
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}" required maxlength="50">
              </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="content">Testo</label>
                <textarea type="text" name='content' rows="10" class="form-control" id="content" required>{{ old('content', $post->content) }}</textarea>
              </div>
        </div>
        <div class="col-10">
            <div class="form-group">
                <label for="image">Immagine</label>
                <input type="url" class="form-control" id="image" value="{{ old('image', $post->image) }}">
              </div>
        </div>
        <div class="col-2">
            <img class="img-fluid" src="{{ $post->image ?? "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw_HeSzHfBorKS4muw4IIeVvvRgnhyO8Gn8w&usqp=CAU" }}" alt="post image preview" id="preview">
        </div>
    </div>
    <hr>
    <footer class="d-flex justify-content-between">
        <a class="btn btn-secondary" href="{{ route('admin.posts.index') }}">
            <i class="fa-solid fa-rotate-left mr-2"></i>Indietro
        </a>
        <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk mr-2"></i> Salva</button>
    </footer>
</form>