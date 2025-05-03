<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return Blog::all();
    }


    public function create() {}


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        
        $post = Blog::create($request->all());
        return response()->json($post, 201);
    }


    public function show($id)
    {
        return Blog::findOrFail($id);
    }


    public function edit(Blog $blog)
    {
        //
    }


    public function update(Request $request, $id) {
        $post = Blog::findOrFail($id);
        $post->update($request->all());
        return response()->json($post, 200);
    }

    public function destroy($id) {
        Blog::destroy($id);
        return response()->json(null, 204);
    }
}
