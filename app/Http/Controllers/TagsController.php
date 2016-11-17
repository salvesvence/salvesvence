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
        $tags = Tag::paginate(15);

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
     * Store a newly created tag.
     *
     * @param TagRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        Tag::create($request->all());

        return redirect()->route('tags.index');
    }

    /**
     * Display the specified tag.
     *
     * @param  $tag
     * @return \Illuminate\Http\Response
     */
    public function show($tag)
    {
        return view('web.pages.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified tag.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function edit($tag)
    {
        return view('web.pages.tags.edit', compact('tag'));
    }

    /**
     * Update the specified tag.
     *
     * @param TagRequest|Request $request
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $tag)
    {
        $tag->update($request->all());

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified tag.
     *
     * @param  Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy($tag)
    {
        $tag->delete();

        return response()->json([
            'message' => 'El tag seleccionado ha sido borrado correctamente.'
        ]);
    }
}