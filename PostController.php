<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index() {
        return view('Post.posts', ["posts" => Post::all()]);
    }

    public function store(Request $request) {
        $postData = $request -> only(['title', 'content']);

        if (count($postData) > 0) {
            $postData["likes"] = 0;
            if (!Post::create($postData)) {
                return view('Post.createPost');
              }
        }
        
        return view('Post.createPost');
    }


    public function show($id) {
        $post = Post::where('id', $id)->first();
        if ($post){
            return view('Post.show', compact('post'));
        }
    }

    public function update($id, Request $request) {
        $sentData = $request -> only(['title', 'content']);
        $post = Post::where('id', $id)->first();
        $post->title = $sentData['title'];
        $post->content = $sentData['content'];
        $post->save();
        return redirect('/posts');
    }


    public function destroy($id) {
        $post = Post::where('id', $id)->first();
        
        $post->delete();
         
        return redirect('/posts')->with('msg', 'Post '.$post->title.'deleted.');

    
    }
    public function like($id) {
        $post = Post::where('id', $id)->first();
        $post->likes+=1;
        $post->save();
        return redirect('/posts'); 
    }
         
        
        
}
