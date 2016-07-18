<?php namespace Integration\Http\Controllers;

use TestCase;
use App\Post;
use App\User;
use App\Category;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class PostsControllerTest extends TestCase {

    use WithoutMiddleware;
    use DatabaseTransactions;

    /**
     * @var $esFaker
     */
    protected $esFaker;

    /**
     * @var Factory $enFaker
     */
    protected $enFaker;

    function setUp()
    {
        parent::setUp();

        $this->esFaker = Factory::create('es');
        $this->enFaker = Factory::create('en');
    }

    /** @test */
    function it_see_all_posts_by_current_locale()
    {
        $post = $this->createPost();

        app()->setLocale('es');

        $this->visit('/posts')
             ->see($post->translate('es')->title);

        app()->setLocale('en');

        $this->visit('/posts')
             ->see($post->translate('en')->title);

        app()->setLocale('fr');

        $this->visit('/posts')
             ->see('');
    }

    private function createPost()
    {
        $post = Post::create([
           'author_id' => factory(User::class)->create()->id,
           'category_id' => factory(Category::class)->create()->id,
        ]);

        foreach(['es', 'en'] as $lang) {

            $post->translateOrNew($lang)->title = $this->{$lang . 'Faker'}->title;
            $post->translateOrNew($lang)->slug = $this->{$lang . 'Faker'}->slug;
            $post->translateOrNew($lang)->intro = $this->{$lang . 'Faker'}->sentence;
            $post->translateOrNew($lang)->body = $this->{$lang . 'Faker'}->paragraph;
        }

        $post->save();

        return $post;
    }
}