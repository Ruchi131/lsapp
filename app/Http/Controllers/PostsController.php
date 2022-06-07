<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Post;
use DB;//if wanna use db queries


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //normal returning all elements
        // return Post::all();
        // $posts = Post::all();

        //using orderBy,where clause and can also use db queries
        // $posts = Post::orderBy('title','desc')->get();
        // $posts = Post::orderBy('title','desc')->paginate(1);
        $posts = Post::orderBy('title','desc')->simplePaginate(1);
        // $posts = Post::where('title','Post Two')->get();

        //when wanting specific number of posts
        // $posts = Post::orderBy('title','desc')->take(1)->get();

        // $posts = DB::select('select * from posts');
        return view('posts.index')->with('posts',$posts);

        //normally use view..
        // return view('posts.index');
        // return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Post::find($id);
        $posts = Post::find($id);
        return view('posts.show ')->with('posts',$posts);
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
