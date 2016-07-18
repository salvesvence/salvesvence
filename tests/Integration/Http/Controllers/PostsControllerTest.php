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

        $post->translateOrNew('en')->title = $this->enFaker->title;
        $post->translateOrNew('en')->slug = $this->enFaker->slug;
        $post->translateOrNew('en')->intro = $this->enFaker->sentence;
        $post->translateOrNew('en')->body = $this->enFaker->paragraph;

        $post->translateOrNew('es')->title = $this->enFaker->title;
        $post->translateOrNew('es')->slug = $this->enFaker->slug;
        $post->translateOrNew('es')->intro = $this->enFaker->sentence;
        $post->translateOrNew('es')->body = $this->enFaker->paragraph;

        $post->save();

        return $post;
    }
}