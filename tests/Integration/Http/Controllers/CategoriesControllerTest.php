<?php namespace Integration\Http\Controllers;

use TestCase;
use App\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CategoriesControllerTest extends TestCase {

    use WithoutMiddleware;
    use DatabaseTransactions;

    /** @test */
    function it_see_all_cateories_by_current_locale()
    {
        $this->createCategory();

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

    }

    /** @test */
    function it_see_the_edit_page_of_specified_category()
    {
        $category = $this->createCategory();

        $this->visit("/categories/{$category->slug}/edit")
             ->see("Editar Categoría {$category->name}:");
    }

    /** @test */
    function it_cans_update_a_specified_category()
    {
        $category = $this->createCategory();

        $this->visit("/categories/{$category->slug}/edit")
             ->see("Editar Categoría {$category->name}:")
             ->type('Nueva Categoría', 'name')
             ->press('save')
             ->seePageIs('/categories')
             ->see('Nueva Categoría');
    }

    /** @test */
    function it_cans_delete_a_specified_category()
    {
        $category = $this->createCategory();

        $this->visit("/categories/{$category->slug}/delete")
             ->seePageIs('/categories')
             ->dontSee($category->slug);
    }

    /**
     * Craete a new category
     *
     * @return Category
     */
    private function createCategory()
    {
        $category = new Category;

        $category->translateOrNew('en')->name = "Web Development";
        $category->translateOrNew('en')->slug = "web-development";

        $category->translateOrNew('es')->name = "Desarrollo Web";
        $category->translateOrNew('es')->slug = "desarrollo-web";

        $category->save();

        return $category;
    }
}