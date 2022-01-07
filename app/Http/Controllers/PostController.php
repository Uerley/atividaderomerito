<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
     public function index(){
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
    public function create(){
        return view('admin.posts.create');
    }
    public function store(Request $request){
       $post = new Post();

        $post->id=$request->id;
        $post->title = $request->title;
        $post->synopsis = $request->synopsis;
        $post->director = $request->director;
        $post->year = $request->year;

        $post->save();

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post Criado com sucesso');
    }
    public function show($id){
        if(!$post = Post::find($id)){
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show',compact('post'));
    }
}


