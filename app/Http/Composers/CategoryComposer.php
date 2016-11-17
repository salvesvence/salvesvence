<?php namespace App\Http\Composers;

use App\Category;
use Illuminate\Contracts\View\View;

class CategoryComposer
{
    /**
     * Get all categories
     *
     * @param View $view
     * @return $this
     */
    public function all(View $view)
    {
        return $view->with('categories', Category::all());
    }
}