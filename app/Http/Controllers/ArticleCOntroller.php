<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            ["id" => 1, "title" => "First Article"],
            ["id" => 2, "title" => "Second Article"],
        ];
        return view('articles.index', [
            'articles' => $data
        ]);
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request)
  {
      Article::create([
          'title' => $request->title,
          'body' => $request->body,
          'category_id' => $request->category_id,
      ]);

      return redirect('/articles/create');
  }
}