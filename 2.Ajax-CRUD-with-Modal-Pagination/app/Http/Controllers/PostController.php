<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
	{
		$posts= Post::all();

		return view('posts.index', compact('posts'));
	}

	public function addPost(PostRequest $request){

    	$post = new Post();
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();

    	return response()->json($post);
	}

}
