<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Mail\Mailables\Content;

class Homecontroller extends Contentconroller 

{
    //


      public function index()
    {
        //
       

        return view('front.index');
    }


    public function show()
    {
       
    }
}
