<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->middleware('auth');
    }

    /**
     * Display a listing of categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::translatedIn($this->locale)->paginate(15);

        return view('web.pages.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.pages.categories.create');
    }

    /**
     * Store a newly created category.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category;

        $category->translateOrNew($request->get('locale'))->name = $request->name;
        $category->translateOrNew($request->get('locale'))->slug = str_slug($request->name);

        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified category.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::whereTranslation('slug', $slug)->firstOrFail();

        return view('web.pages.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = Category::whereTranslation('slug', $slug)->firstOrFail();

        return view('web.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified category.
     *
     * @param CategoryRequest $request
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $slug)
    {
        Category::whereTranslation('slug', $slug)->firstOrFail()
                    ->getTranslation($this->locale)
                    ->update($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified category.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Category::whereTranslation('slug', $slug)->delete();

        return redirect()->route('categories.index');
    }
}
