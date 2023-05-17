<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $mustReads = Post::all();
        return Inertia::render('Home', $mustReads);
    }

    public function styles()
    {
        return Inertia::render('Styles');
    }

    public function travels()
    {
        return Inertia::render('Travels');
    }

    public function opinion()
    {
        return Inertia::render('Opinions');
    }

    public function mustReads()
    {
        return Inertia::render('MustReads');
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        return Inertia::render('Dashboard', $user);
    }
}
