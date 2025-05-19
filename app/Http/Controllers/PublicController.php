<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::latest()
            ->where('status', 'published')
            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->with(['category:id,name', 'author:id,name'])
            ->paginate(10);

        $categories = Category::all();
        return Inertia::render('Public/index', [
            'posts' => $posts,
            'categories' => $categories,
            'selectedCategory' => Category::find($request->category),
        ]);
    }
    public function detailPost($id)
    {
        $post = Post::where('id', $id)
            ->where('status', 'published')
            ->with(['category:id,name', 'author:id,name'])
            ->firstOrFail();
        if (!$post) {
            return redirect()->route('public.index')->with('error', 'Post not found');
        }
        $post->increment('view_count');

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->latest()
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->with(['category:id,name', 'author:id,name'])
            ->take(4)
            ->get();
        return Inertia::render('Public/detailPost', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
        ]);
    }
    public function authors()
    {
        $authors = Author::latest()
            ->paginate(12);
        return Inertia::render('Public/authors', [
            'authors' => $authors,
        ]);
    }
    public function author($id)
    {
        $author = Author::where('id', $id)->firstOrFail();
        if (!$author) {
            return redirect()->route('public.authors');
        }
        $posts = Post::where('author_id', $id)
            ->latest()
            ->where('status', 'published')
            ->with(['category:id,name'])
            ->paginate(10);
        return Inertia::render('Public/author', [
            'author' => $author,
            'posts' => $posts,
        ]);
    }
}
