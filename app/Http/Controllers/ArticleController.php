<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index','show','byCategory', 'byWriter','articleSearch');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6); 
        return view('article.index', compact('articles'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([


            'title'=>'required|unique:articles|min:15',
            'subtitle'=>'required|unique:articles|min:15',
            'body'=>'required|min:10',
            'image' =>'image|required',
            'category'=>'required',
            'tags'=>'required',
        ]);


        $article = Article::create([

            'title'=> $request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'image'=>$request->file('image')->store('public/images'),
            'category_id'=>$request->category,
            'user_id'=>Auth::user()->id,
            'slug'=>Str::slug($request->title),
        ]);

        $tags = explode(', ',$request->tags);

        foreach($tags as $tag) {
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag);
        }
        


        return redirect(route('home'))->with ('message', 'The Article created successfully!  Wait for the revision by our Reviewer.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([

            'title'=>'required|min:15|unique:articles,title,' . $article->id,
            'subtitle'=>'required|min:15|unique:articles,subtitle,' . $article->id,
            'body'=>'required|min:10',
            'image' =>'image',
            'category'=>'required',
            'tags'=>'required',
        ]);

        $article->update([

            'title'=> $request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'category_id'=>$request->category,
            'slug'=>Str::slug($request->title),
        ]);

        if($request->image){
            Storage::delete($article->image);
            $article->update([
                'image' => $request->file('image')->store('public/images'),
            ]);
        }

        $tags = explode(', ', $request->tags);
        $newTags=[];

        foreach($tags as $tag) {
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $newTags[] = $newTag->id;
        }
        
        $article->tags()->sync($newTags);

        return redirect(route('writer.dashboard'))->with ('message', 'The Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach($article->tags as $tag){
            $article ->tags()->detach($tag);
        }
        $article->delete();
        return redirect(route('writer.dashboard'))->with ('message', 'The Article deleted successfully!');
    }

    public function byCategory(Category $category) 
    {
        $articles = $category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.by-category', compact('category', 'articles'));
    }

    public function byWriter(User $user) 
    {
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.by-user', compact('user', 'articles'));
    }
    
    public function articleSearch(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get(); 
        return view('article.search-index', compact('articles','query'));
        
    }


}
