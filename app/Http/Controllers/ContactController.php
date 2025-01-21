<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post_table;

class ContactController extends Controller
{
    public function contact()
    {
        $data = post_table::all();
        return view('contact', ['data'=>$data]);
    }
}
