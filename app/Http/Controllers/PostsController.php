<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

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
        $posts = Post::translatedIn(app()->getLocale())->paginate(15);

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $post = new \App\Post();
//        $post->save();
//
//        foreach (['en', 'nl', 'fr', 'de'] as $locale) {
//            $post->translateOrNew($locale)->title = "Tag Title {$locale}";
//            $post->translateOrNew($locale)->slug = "Tag Slug {$locale}";
//            $post->translateOrNew($locale)->intro = "Tag Intro {$locale}";
//            $post->translateOrNew($locale)->body = "Tag Body {$locale}";
//        }
//
//        $post->save();
//
//        $post->author()->associate(\App\User::first());
//        $post->category()->associate(\App\Category::first());
//        $post->tags()->attach(\App\Tag::first());
//        $post->save();
//
//        echo 'Created an tag with some translations!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        app()->setLocale($locale);
//
//        $post = \App\Post::first();
//
//        return $post->category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
