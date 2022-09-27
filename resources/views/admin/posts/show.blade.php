@extends('layouts.app')

@section('content')
    <header>
        <h1>{{ $post->title}}</h1>
    </header>
    <div class="clearfix">
        @if($post->image)
            <img class="float-left mr-2 mb-2" src="{{ $post->image }}" alt="{{ $post->slug }}">
        @endif
            <p>{{ $post->content }}</p>
    </div>
        <p><u><strong>Creato il: </strong></u><time>{{ $post->created_at }}</time></p>
        
        <p><u><strong>Ultima modifica: </strong></u><time>{{ $post->updated_at }}</time></p>
        
    <hr>
    <footer class="d-flex align-items-center justify-content-between">
        <div>
            <a href="{{ route('admin.posts.index') }} " class="btn btn-secondary">
                <i class="fa-solid fa-rotate-left mr-2"></i>Indietro
            </a>
        </div>
        <div class="d-flex align-items-center justify-content-end">
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">
                    <i class="fa-solid fa-trash mr-2"></i>Elimina
                </button>
            </form>
        </div>
    </footer>

@endsection