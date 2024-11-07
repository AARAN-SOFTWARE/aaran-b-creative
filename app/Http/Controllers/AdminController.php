<?php

namespace App\Http\Controllers;

use Aaran\Blog\Models\BlogPost;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public $users;

    public function getUserData()
    {
        $this->users = User::find(auth()->id());
    }

    public function index()
    {
        $this->getUserData();
        $blogPosts = BlogPost::latest()->take(5)->get();

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('user.dashboard')->with([
                    'users' => $this->users,
                    'blogPosts' => $blogPosts,
                ]);
            } elseif ($usertype == 'admin') {
                return view('admin.index')->with('users', $this->users);
            } else {
                return redirect('/')->with('error', 'You are not authorized to access this page');
            }
        }
    }
}
