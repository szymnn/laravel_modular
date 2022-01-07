<?php

namespace App\Http\Controllers;

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
        Stats::updateOrCreate(['user_id' => auth()->user()->id], ['exp' => isset(auth()->user()->stats->exp) ? auth()->user()->stats->exp + 10 : 10,
            'posts' => isset(auth()->user()->stats->posts) ? auth()->user()->stats->posts + 1 : 1]);
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
//        $post = Posts::findorfail($id);
//        //dd($post);
//        return view('posts.edit', ['post' => $post]);

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
        //dd($post);
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
        $params = [
            'title' => $request->title,
            'categories' => $request->categories
        ];
        $params = array_filter($params);
        if(!empty($params)) {
            if (count($params) == 1) {
                if (isset($params['categories'])) {
                    $post = Posts::select('*')->where('categories', '=', $params['categories'])->get();
                } elseif (isset($params['title'])) {
                    $post = Posts::select('*')->where('title', '=', $params['title'])->get();
                }
                return Response::json($post, 200, array(), JSON_PRETTY_PRINT);
            } else {
                $post = Posts::select('*')->where('categories', '=', $params['categories'])->where('title', '=', $params['title'])->get();
                return Response::json($post, 200, array(), JSON_PRETTY_PRINT);
            }
        }else echo "brak parametrow";
    }
}

