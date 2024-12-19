<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\http\Resources\BlogResource;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        return BlogResource::collection(Blog::all());
        return response()->json([
            'data' => $blogs,
        ])->header('Access-Control-Allow-Origin', 'http://localhost:5173') // Perbolehkan akses dari mana saja
          ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
          ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->storeAs('public/posts', $image->hashName());

        $blog = Blog::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $image->hashName(), 
        ]);

        return new BlogResource($blog);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return new BlogResource($blog);
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'nullable|string|max:255',
        'content' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $blog = Blog::findOrFail($id);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/posts', $image->hashName());
        
        if ($blog->image) {
            Storage::delete('public/posts/' . $blog->image);
        }

        $validated['image'] = $image->hashName();
    }

    $blog->update($validated);

    return new BlogResource($blog);
}

    public function destroy($id)
    {
        Blog::destroy($id);
        return response(null,204);
    }
}
