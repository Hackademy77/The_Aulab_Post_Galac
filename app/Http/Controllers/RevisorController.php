<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{

    public function dashboard(){
        $unrevisionedArticles = Article::where('is_accepted', NULL)->get();
        $acceptedArticles = Article::where('is_accepted', true)->get();
        $rejectedArticles = Article::where('is_accepted', false)->get();
    
        return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles'));
    }

    public function acceptArticle(Article $article){
        $article->update([
            'is_accepted' => true,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'You have accept the chosen article');
    }
   
    public function rejectArticle(Article $article){
        $article->update([
            'is_accepted' => false,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'You have reject the chosen article');
    }

    
    public function undoArticle(Article $article){
        $article->update([
            'is_accepted' => NULL,
        ]);

        return redirect(route('revisor.dashboard'))->with('message', 'You have send again the chosen article in review');
    }
}
