<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\User;
class Homecontroller extends Controller
{
    //


      public function index()
    {
        //
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        $tags = $portfolios->unique('tag');

        return view('front.main', compact('portfolios', 'tags'));
    }


    public function show()
    {
        // $article->increment('hit');
        // $comments = $article->comments()->where('status', 1)->get();
        // return view('front.article', compact('article', 'comments'));
    }
}
