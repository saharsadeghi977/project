<?php

namespace App\Http\Controllers\back;
use App\frontmodels\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
