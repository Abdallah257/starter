<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public  function  index(){
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public  function  create()
    {
        return view('articles.create',[
            'categories'=>Category::all(),
            'tags'=>Tag::all()
        ]);
    }

    public  function  store()
    {

        \request()->validate([
            "title"=>"required|string",
            "body"=>"required|max:255|string",
            "tags"=>"exists:tags,id",
            "categories"=>"exists:categories,id"
        ]);

        $article = Article::create([
            'title'=>\request('title'),
            'body'=>\request('body'),
            'employee_id'=>1
        ]);

        $article->categories()->sync(\request('categories'));

        $article->tags()->sync(\request('tags'));

        return \redirect()->route('articles.index');

    }

    public  function  show(Article $article)
    {
        return view('articles.show',compact('article'));
    }

    public  function  edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public  function  update(Article $article){
        request()->validate([
            'title'=>'required|string',
            'body'=>'required|max:255',
        ]);
        $article->update(request()->all());
        return \redirect()->route('articles.index');
    }

    public  function  destroy(Article $article)
    {
        $article->delete();
        return \redirect()->route('articles.index');
    }

}
