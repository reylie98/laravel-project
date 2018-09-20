<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Post= Post::all(); /** create object from model */
        $Post = Post::orderBy ('created_at','DESC')->paginate(8);
        return view ('posts.index')->with('post',$Post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title'=> 'required',
            'body'=> 'required'
        ]);
    
        // this create a save function
        $post = new Post;
        $post->title =$request->input ('title');
        $post->body =$request->input ('body');
        $post->save();

        return redirect ('/posts')->with ('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = DB::select("SELECT * FROM post");
        $Post = Post::find($id);
        return view ('posts.show')->with ('post',$Post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Post = Post::find($id);
        return view ('posts.edit')->with ('post',$Post);
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
        $this->validate($request,[
            'title'=> 'required',
            'body' => 'required',
        ]);
        $Post = Post::find($id);
        $Post->body =$request->input ('body');
        $Post->body =$request->input ('body');
        $Post->save();

        return redirect ('/posts')->with ('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();

        return redirect ('/posts')->with ('success','Post Deleted');

    
    }
}
