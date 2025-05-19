<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()
            ->when($request->status && $request->status !== 'all', function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->paginate(6)->withQueryString();
        return Inertia::render(
            'Post/index',
            [
                'posts' => $posts,
                'status' => $request->status,
            ]
        );
    }

    public function create()
    {
        $authors = Author::all()->select('id', 'name');
        $categories = Category::all()->select('id', 'name');
        return Inertia::render('Post/create', [
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:published,unpublished',
        ]);

        if ($validated['status'] === 'published') {
            $validated['published_at'] = now();
        }

        Post::create($validated);

        return redirect()->back()->with('message', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        $authors = Author::all()->select('id', 'name');
        $categories = Category::all()->select('id', 'name');
        return Inertia::render('Post/edit', [
            'post' => $post,
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:published,unpublished',
        ]);

        if ($validated['status'] === 'published') {
            $validated['published_at'] = now();
        } else {
            $validated['published_at'] = null;
        }

        $post->update($validated);

        return redirect()->back()->with('message', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('message', 'Post deleted successfully');
    }
}
