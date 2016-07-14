<?php namespace Integration\Http\Controllers;

use App\Tag;
use TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TagsControllerTest extends TestCase {

    use WithoutMiddleware;
    use DatabaseTransactions;

    /** @test */
    function it_see_all_tags_by_current_locale()
    {
        $this->createTag();

        app()->setLocale('es');

        $this->visit('/tags')
            ->see('desarrollo-web');

        app()->setLocale('en');

        $this->visit('/tags')
            ->see('web-development');

        app()->setLocale('fr');

        $this->visit('/tags')
            ->see('');
    }

    /** @test */
    function it_see_the_create_tag_view()
    {
        $this->visit('/tags/create')
             ->see('Crear Tag:');
    }

    /** @test */
    function it_store_a_new_tag()
    {
        $this->visit('/tags/create')
             ->type('Nuevo Tag', 'name')
             ->press('save')
             ->seePageIs('/tags')
             ->see('Nuevo Tag');
    }

    /** @test */
    function it_see_the_specified_tag_view()
    {

    }

    /** @test */
    function it_see_the_edit_page_of_specified_tag()
    {
        $tag = $this->createTag();

        $this->visit("/tags/{$tag->slug}/edit")
             ->see("Editar Tag {$tag->name}:");
    }

    /** @test */
    function it_cans_update_a_specified_tag()
    {
        $tag = $this->createTag();

        $this->visit("/tags/{$tag->slug}/edit")
            ->see("Editar Tag {$tag->name}:")
            ->type('Segundo Tag', 'name')
            ->press('save')
            ->seePageIs('/tags')
            ->see('Segundo Tag');
    }

    /**
     * Create a new tag.
     *
     * @return Tag
     */
    private function createTag()
    {
        $tag = new Tag;

        $tag->translateOrNew('en')->name = "Web Development";
        $tag->translateOrNew('en')->slug = "web-development";

        $tag->translateOrNew('es')->name = "Desarrollo Web";
        $tag->translateOrNew('es')->slug = "desarrollo-web";

        $tag->save();

        return $tag;
    }
}