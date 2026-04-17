<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::latest()->get();
        return view('dashboard.article.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(post $post)
    {
        return view('dashboard.article.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'description' => 'required|string',
            'picture' => 'required|image|mimes:jpg,png|max:1024',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $validated['picture'] = $request->file('picture')->store('posts', 'public');
        }

        $validated['user_id'] = Auth::id();

        post::create($validated); 
        return redirect()->route('dashboard.article.index')->with('success', 'Post berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = post::findOrFail($id);
        $posts = post::latest()->get();
        return view('dashboard.article.show', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        return view('dashboard.article.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'picture' => 'image|mimes:jpg,png|max:1024',
            'category_id' => 'required|exists:categories,id'
        ]);

        if($request->hasFile('picture')) {
            Storage::disk('public')->delete($post->picture);
            $validated['picture'] = $request->file('picture')->store('posts', 'public');
        }

        $post->update($validated);
        return redirect()->route('dashboard.article.index')->with('success', 'Post Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        if($post->picture) {
            Storage::disk('public')->delete($post->picture);
        }

        $post->delete();
        return redirect()->route('dashboard.article.index')->with('success', 'Post Berhasil Dihapus!');
    }
}
