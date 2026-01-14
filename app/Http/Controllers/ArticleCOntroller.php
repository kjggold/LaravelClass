<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data =Article::all();
        return view('articles.index', [
            'articles' => $data
        ]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:10',
            'category_id' => 'required|integer',
        ]);

        // Save to database
        Article::create($validated);

        // Redirect back to create page
        return redirect('/articles/create')->with('success', 'Article created successfully!');
    }

    public function read()
{
    $articles = Article::all();
    return view('articles.read', compact('articles'));
}

public function edit($id)
{
    $article = Article::findOrFail($id);
    return view('articles.edit', compact('article'));
}

public function update(Request $request, $id)
{
    $article = Article::findOrFail($id);

    $article->update([
        'title' => $request->title,
        'body' => $request->body,
        'category_id' => $request->category_id,
    ]);

    return redirect('/articles');
}
public function destroy($id)
{
    $article = Article::findOrFail($id);
    $article->delete();

    return redirect('/articles');
}


}