<?php

namespace App\Http\Controllers;

use App\Events\PostsCreated;
use App\Http\Requests\CreatePost;
use App\Models\Categories;
use App\Models\Posts;
use App\Models\Stats;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        $posts = Posts::simplepaginate(4);
        return view("layouts.posts.index", ['categories' => $categories, 'posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $posts = Posts::simplepaginate(4);
        return view('layouts.posts.create', ['categories' => $categories, 'posts' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePost $request)
    {
        $credentials = [
            'author' => auth()->user()->name,
            'title' => $request->title,
            'content' => $request->content,
            'categories' => $request->categories
        ];

        Posts::create($credentials);

        event(new PostsCreated(auth()->user()));
        return redirect()->route('posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::findorfail($id);
        $categories = Categories::all();
        return view('layouts.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePost $request, $id)
    {
        $credentials = [
            'title' => $request->title,
            'content' => $request->content,
            'categories' => $request->categories
        ];

        Posts::updateOrCreate(['id' => $id], $credentials);
        return redirect()->route('posts.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::findorfail($id);
        $post->delete();
        return redirect()->route('posts.create');

    }

    public function api(Request $request){
        $post = Posts::select('*');
        if($request->input('categories')){
            $post = $post->where('categories', '=',$request->input('categories'));
        }
        if($request->input('title')){
            $post = $post->where('title', 'like',"%".$request->input('title')."%");
        }
        return response()->json(["posts"=>$post->get(), JSON_PRETTY_PRINT]);
    }
}

