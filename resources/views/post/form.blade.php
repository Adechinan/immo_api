@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route($post->exists?'post.update':'post.store', $post) }}" method="post" class="vstack gap-2">
        @csrf
        @method($post->exists?'put':'post')
        <div class="row">
            <div class="col-12 col-md-6">
                <x-input class="form-control" name="titre" type="text" :value="old('contenu', '')" label="titre"/>
                <x-textarea name="contenu" type="text" :value="old('contenu', '')" label="Contenu"/>
                <x-input name="payant" type="checkbox" :value="old('contenu', '')" label="Payant" class="form-switch"/>
                <button class="btn btn-danger ms-auto">Publier</button>
            </div>
        </div>
    </form>
    </div>
@endsection