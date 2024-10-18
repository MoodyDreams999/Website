<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class EditorController extends Controller
{
    public function index()
    {
        // Editor dashboard view
        return view('editor.dashboard');
    }

    public function manageArticles()
    {
        // List all articles
        $articles = Article::all();
        return view('editor.articles.index', compact('articles'));
    }

    public function createArticle()
    {
        // Show form to create a new article
        return view('editor.articles.create');
    }

    public function storeArticle(Request $request)
    {
        // Save the new article
        Article::create($request->all());
        return redirect()->route('editor.articles.index');
    }

    public function editArticle($id)
    {
        // Edit an article
        $article = Article::find($id);
        return view('editor.articles.edit', compact('article'));
    }

    public function updateArticle(Request $request, $id)
    {
        // Update article details
        $article = Article::find($id);
        $article->update($request->all());
        return redirect()->route('editor.articles.index');
    }

    public function deleteArticle($id)
    {
        // Delete an article
        Article::destroy($id);
        return redirect()->route('editor.articles.index');
    }
}
