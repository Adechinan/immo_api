@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-info">
            {{ session('success') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Votre playlist
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts récents</div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($recentPosts as $post)
                            <div class="col-12 col-md-6">
                                <x-post_card :post="$post"/>
                            </div>      
                        @empty
                            <p class="alert alert-secondary">Il n'y a rien à afficher</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
