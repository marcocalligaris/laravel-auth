@extends('layouts.app')

@section('content')

<header class="d-flex justify-content-between align-items-center">
    <h1>Elenco dei post</h1>
    <a class="btn btn-success" href="{{ route('admin.posts.create') }} ">
      <i class="fa-solid fa-plus mr-2"></i>Crea nuovo post
    </a>
</header>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Autore</th>
            <th>Titolo</th>
            <th>Slug</th>
            <th>Categoria</th>
            <th>Creato il</th>
            <th>Modificato il</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>
                  @if($post->user)
                  {{ $post->user->name }}</td>
                  @else Generic
                  @endif
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td> @if ($post->category)  {{ $post->category->label }} @else  Generic @endif </td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td class="d-flex justify-content-end">
                  <a class="btn btn-sm btn-info text-white mr-2" href="{{ route('admin.posts.edit', $post) }}">
                    <i class="fa-solid fa-pencil"></i>
                  </a>
                  <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mr-2" type="submit">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
                  <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.show', $post) }}">
                    <i class="fa-solid fa-eye"></i>
                  </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">
                    <h3 class="text-center">Nessun post</h3>
                </td>
            </tr>
            @endforelse
            
        </tbody>
      </table>

@endsection