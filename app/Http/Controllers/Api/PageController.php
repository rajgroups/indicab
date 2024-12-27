<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;

class PageController extends Controller
{
    public function index()
    {
        // dd('dead');
        return response()->json(['success' => true, 'data' => Page::limit(10)->get()]);
    }

    public function show($id)
    {
        $post = page::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        return response()->json(['success' => true, 'data' => $post]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = page::create($request->all());

        return response()->json(['success' => true, 'data' => $post], 201);
    }

    public function update(Request $request, $id)
    {
        $post = page::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->update($request->all());

        return response()->json(['success' => true, 'data' => $post]);
    }

    public function destroy($id)
    {
        $post = page::find($id);

        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }

        $post->delete();

        return response()->json(['success' => true, 'message' => 'Post deleted']);
    }
}
