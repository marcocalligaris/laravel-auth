@extends('layouts.app')

@section('content')
<header>
    <h1>Elenco dei post</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th class="border-info"scope="col">#</th>
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
                <td></td>
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
</header>
@endsection