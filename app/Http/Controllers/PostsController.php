<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\banner;
use DB;


class PostsController extends Controller
{
    
   /* public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts =  Post::orderBy('created_at','desc')->paginate(2);
        //return view('posts.index')->with('posts',$posts);
        
        return banner::All();
        return view('banners.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'maths' => 'required',
            'spcc' =>'required',
            'dwm' =>'required',
            'se' =>'required',
            'ml' =>'required',
        ]);
        
        //create post
        $post = new Post;
        $post->mathsmarks = $request->input('maths');
        $post->spccmarks = $request->input('spcc');
        $post->dwmmarks = $request->input('dwm');
        $post->semarks = $request->input('se');
        $post->mlmarks = $request->input('ml');
        $post->save();
        
        return redirect('/courses/show')->with('success', 'Post Created');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banners = banner::All();
        return view('banners.index')->with('banners', $banners);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
