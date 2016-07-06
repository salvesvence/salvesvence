<?php namespace Integration\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use TestCase;

class CategoriesControllerTest extends TestCase {

    use WithoutMiddleware;
    use DatabaseTransactions;

    /** @test */
    function it_see_all_cateories_by_current_locale()
    {
        $stCategory = new Category;

        $stCategory->translateOrNew('en')->name = "Web Development";
        $stCategory->translateOrNew('en')->slug = "web-development";

        $stCategory->translateOrNew('es')->name = "Desarrollo Web";
        $stCategory->translateOrNew('es')->slug = "desarrollo-web";

        $stCategory->save();

        app()->setLocale('es');

        $this->visit('/categories')
             ->see('desarrollo-web');

        app()->setLocale('en');

        $this->visit('/categories')
             ->see('web-development');

        app()->setLocale('fr');

        $this->visit('/categories')
             ->see('');
    }
}