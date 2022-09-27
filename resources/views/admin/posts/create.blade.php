@extends('layouts.app')

@section('content')
<header>
    <h1>Crea un nuovo post</h1>
</header>
<hr>
<form action="{{ route('admin.posts.store') }}" method="POST">
    <hr>
    <footer class="d-flex justify-content-between">
        <a class="btn btn-secondary" href="{{ route('admin.posts.index') }}">
            <i class="fa-solid fa-rotate-left mr-2"></i>Indietro
        </a>
        <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk mr-2"></i> Salva</button>
    </footer>
</form>

@endsection