<?php namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::select('id', 'title', 'slug')->paginate(15);

        return view('web.pages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.pages.posts.create');
    }

    /**
     * Store a newly created post.
     *
     * @param PostRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified post.
     *
     * @param $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        return view('web.pages.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        return view('web.pages.posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param PostRequest|Request $request
     * @param $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $post)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
