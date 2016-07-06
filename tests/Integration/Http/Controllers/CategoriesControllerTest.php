<?php namespace Integration\Http\Controllers;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use TestCase;

class CategoriesControllerTest extends TestCase {

    use WithoutMiddleware;

    /** @test */
    function it_see_all_cateories()
    {
        $this->visit('/categories')
             ->see('Categories');
    }
}