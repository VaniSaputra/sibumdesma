<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class DashboardController extends Controller
{

    public function index(): View
    {
        //Memasukkan data ke dalam Views.post.index
        return view('dashboard');
    }

}
