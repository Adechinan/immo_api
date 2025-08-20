<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostformRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = new Post();
        return view('post.form', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostformRequest $request)
    {
        $user = Auth::user();
        $post = Post::create([
            'titre' => $request->validated('titre'),
            'contenu' => $request->validated('contenu'),
            'payant' => $request->validated('payant'),
            'user_id' => $user->id
        ]);
        return to_route('dashboard')->with('success', 'Le post a été bien créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
