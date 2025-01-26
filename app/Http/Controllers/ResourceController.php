<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post_table;
use Illuminate\Support\Facades\Route;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data = post_table::all();
        return view('/contact', ['data'=>$data]);
    }

    /**         
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new post_table();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = post_table::find($id);
        return view('/show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
