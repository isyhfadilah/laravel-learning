<?php

namespace App\Http\Controllers;

// import model post
use App\Models\Post;

// return type view 
use Illuminate\View\View;

// return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
    * index
    *
    * @return View
    */

    public function index(): view
    {
        // get posts
        $posts = Post::latest()->paginate(5);

        // render view with posts
        return view('posts.index', compact('posts'));
    }

    /**
    * create
    *
    * @return View
    */

    public function create(): View
    {
        return view('posts.create');
    }

    /**
    * store
    *
    * @param mixed $request
    * @return RedirectResponse
    */
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        // create post
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);

        // redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
    * show
    *
    * @param mixed $id
    * @return View
    */

    public function show(string $id): View
    {
        // get post by ID
        $post = Post::findOrFail($id);

        // render view with post
        return view('posts.show', compact('post'));
    }

}
