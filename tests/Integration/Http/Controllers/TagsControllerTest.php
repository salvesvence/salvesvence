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