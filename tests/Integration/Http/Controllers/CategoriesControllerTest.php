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

    /** @test */
    function it_see_the_create_category_view()
    {
        $this->visit('/categories/create')
             ->see('Crear Categoría:');
    }


    /** @test */
    function it_store_a_new_category()
    {
        $this->visit('/categories/create')
             ->type('Nueva Categoría', 'name')
             ->press('save')
             ->seePageIs('/categories');
    }

    /** @test */
    function it_see_the_specified_category_view()
    {
        $stCategory = new Category;

        $stCategory->translateOrNew('en')->name = "Web Development";
        $stCategory->translateOrNew('en')->slug = "web-development";

        $stCategory->translateOrNew('es')->name = "Desarrollo Web";
        $stCategory->translateOrNew('es')->slug = "desarrollo-web";

        $stCategory->save();

        $this->visit("/categories/{$stCategory->slug}/edit")
            ->see("Editar Categoría {$stCategory->name}:");
    }
}