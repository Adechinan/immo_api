@extends('base')

@section('title', "L'accueil")

@section('content')
    <div class="container mt-2 vstack gap-2">
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mb-2">
                    <x-post_card :post="$post"/>
                </div>
            @empty
                <p class="alert alert-secondary">Il n'y a rien à afficher</p>
            @endforelse
        </div>
        {{ $posts->links() }}
    </div>  
@endsection