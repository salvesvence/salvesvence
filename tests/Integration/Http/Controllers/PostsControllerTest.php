<?php namespace Integration\Http\Controllers;

use TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class PostsControllerTest extends TestCase {

    use WithoutMiddleware;
    use DatabaseTransactions;
}