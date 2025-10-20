<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'is_accepted' => false, // opzionale
        ]);

        return redirect()->route('article.my')->with('message', 'Articolo creato con successo!');
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function byCategory(Category $category)
    {
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', compact('articles', 'category'));
    }

    public function myArticles()
    {
        $user = auth()->user();
        $articles = $user->articles()->latest()->get();
        return view('articles.my-articles', compact('articles'));
    }
}


