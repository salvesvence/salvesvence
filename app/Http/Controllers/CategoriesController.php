<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
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
     * Display a listing of categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(15);

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
        Category::create($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified category.
     *
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        return view('web.pages.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        return view('web.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified category.
     *
     * @param CategoryRequest $request
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $category)
    {
        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified category.
     *
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category->delete();

        return response()->json([
            'message' => 'La categoría seleccionada ha sido borrada correctamente.'
        ]);
    }
}
