<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showHome(){
        return view('post.home');
    }
    
    public function showCreate(){
        return view('post.create');
    }
    
    public function createPost(Request $request){
        $request->validate([
            "title"=>"required",
            "content"=>"required",
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'users_id' => auth()->user()->id
        ]);
        return redirect('/post/home');
    }
    
    public function showListPost(Request $request){
        $posts = Post::where('users_id','=', auth()->user()->id)->get();

        return view('post.home', compact('posts'));
    }
    
    public function showPost(Request $request, $id){
        
        $post = Post::find($id);
        
        return view('post.view', compact('post'));
    }
    
    public function deletePost(Request $request, $id){
        
        $post = Post::find($id);
        $post->delete();
        
        $request->session()->flash('message', 'Post berhasil dihapus!');
        return redirect('/post/home');
    }
    
    public function showEdit(Request $request, $id){
        $post = Post::find($id);
        
        return view('post.edit', compact('post'));
    }
    
    public function edit(Request $request, $id){
        $post = Post::find($id);
        
        $request->validate([
            "title"=>"required",
            "content"=>"required",
        ]);
        
        $post->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);

        return redirect("/posts/$post->id");
    }//
}
