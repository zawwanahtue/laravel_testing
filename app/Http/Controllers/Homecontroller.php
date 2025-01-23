<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home()
    {
        $data = [
            'num1' => 'value1',
            'num2' => 'value2',
            'num3' => 'value3',
        ];
        return view('home', ['data' => $data]);
    }
    
    public function about()
    {
        return view("about");
    }
}
