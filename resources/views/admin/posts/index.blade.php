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
            <th>Titolo</th>
            <th>Slug</th>
            <th>Creato il</th>
            <th>Modificato il</th>
            <th>Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td class="d-flex justify-content-end">
                  <a class="btn btn-sm btn-info mr-2 text-white" href="{{ route('admin.posts.edit', $post) }}">
                    <i class="fa-solid fa-pencil mr-2"></i>Modifica
                  </a>
                  <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm mr-2" type="submit">
                        <i class="fa-solid fa-trash mr-2"></i>Elimina
                    </button>
                </form>
                  <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.show', $post) }}">
                    <i class="fa-solid fa-eye mr-2"></i>Vedi
                  </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    <h3 class="text-center">Nessun post</h3>
                </td>
            </tr>
            @endforelse
            
        </tbody>
      </table>

@endsection