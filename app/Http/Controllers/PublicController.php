<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {

        $orderFirst="order-md-first";
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(2)->get();
        
        $updateArticles = Article::where('is_accepted', true)->orderBy('updated_at', 'desc')->take(6)->get(); 
        
        return view('welcome', compact('articles', 'updateArticles'),compact('orderFirst'));
    }

    public function privacy(){
        return view('privacy');
    }

    public function about(){
        return view('about');
    }

    public function __construct() {
        $this->middleware('auth')->except('home', 'privacy', 'about');
    }

    public function careers(){
        return view ('careers');
    }

    public function careersSubmit(Request $request) {
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);
        
        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role','email','message')));

        switch($role){
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;    
        }

        $user->update();
        return redirect(route('home'))->with('message', 'Thanks for contacting us!');

    }
}
