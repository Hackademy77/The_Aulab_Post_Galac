<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();

        return view ('admin.dashboard', compact('adminRequests','revisorRequests','writerRequests'));

    }

    public function setAdmin(User $user){


        $user->update([
            'is_admin'=>true,
            
        ]);

        return redirect(route('admin.dashboard'))->with('message','You have successfully made the selected user an aministrator');
    }



    public function setRevisor(User $user){


        $user->update([
            'is_revisor'=>true,
        ]);

        return redirect(route('admin.dashboard'))->with('message','You have successfully made the selected user an reviewer');
    }


    public function setWriter(User $user){


        $user->update([
            'is_writer'=>true,
        ]);

        return redirect(route('admin.dashboard'))->with('message','You have successfully made the selected user an editor');
    }

    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name'=>'required|unique:tags',
        ]);

        $tag->update([
            'name'=>strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message','You have successfully uppdated the tag');

    }

    public function deleteTag(Tag $tag){

        foreach($tag->articles as $article){
            $article->tags()->detach($tag);
        }
        $tag->delete();

        return redirect(route('admin.dashboard'))->with('message','You have successfully delete the tag');

    }
    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name'=>'required|unique:categories',
        ]);

        $category->update([
            'name'=>strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message','You have successfully updated the category');

    }
    public function deleteCategory(Category $category){

       
        $category->delete();

        return redirect(route('admin.dashboard'))->with('message','You have successfully delete the category');

    }

    public function storeCategory(Request $request){

        Category::create([

            'name'=>strtolower($request->name),
        ]);
       

        return redirect(route('admin.dashboard'))->with('message','You have successfully add a new category');

    }




}