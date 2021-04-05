<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\PostRepository;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->allPost();
        return view('server.post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->postRepository->createPost($request);
        return redirect()->back()->with('success', 'Post created successfully');
    }

    public function show($id)
    {
        $post = $this->postRepository->showByID($id);
        return view('server.post.show', compact('post'));
    }
    
    public function post($id)
    {
        $post = $this->postRepository->showByID($id);
        return view('post', compact('post'));
    }

    public  function update(Request $request,$id)
    {
       $update =  $this->postRepository->updatePost($request, $id);
       if($update) {
        return  redirect()->route('post-show', $id)->with('success', 'Post updated successfully');
       }
    }

    public function destroy($id)
    {
        $this->postRepository->deletePost($id);
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}
