<?php namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests;

class TagsController extends Controller
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
     * Display a listing of tags.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::translatedIn(app()->getLocale())->paginate(15);

        return view('web.pages.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new tag.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.pages.tags.create');
    }

    /**
     * Store a newly created tag in storage.
     *
     * @param TagRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tag = new Tag;

        $tag->translateOrNew(app()->getLocale())->name = $request->name;
        $tag->translateOrNew(app()->getLocale())->slug = str_slug($request->name);

        $tag->save();

        return redirect()->route('tags.index');
    }

    /**
     * Display the specified tag.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tag = Tag::whereTranslation('slug', $slug)->firstOrFail();

        return view('web.pages.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified tag.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $tag = Tag::whereTranslation('slug', $slug)->firstOrFail();

        return view('web.pages.tags.edit', compact('tag'));
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
