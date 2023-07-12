<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
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

}