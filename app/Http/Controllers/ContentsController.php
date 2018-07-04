<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentsController extends Controller
{
    public function index()
    {
        
        return view('contents.index');
    }
    
    public function branch()
    {
        
        return view('contents.branch');
    }
    
    public function gallery()
    {
        
        return view('contents.gallery');
    }
}
