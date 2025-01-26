<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post_table;

class Homecontroller extends Controller
{
    public function home()
    {
        $data = new post_table()->all();
        return view('home', ['data' => $data]);
    }
    
    public function about()
    {
        return view("about");
    }

    public function simple()
    {
        return view("simple");
    }
}
