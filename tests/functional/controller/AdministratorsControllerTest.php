<?php

use App\News;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdministratorsControllerTest extends TestCase
{
    use DatabaseTransactions, AuthTrait;

    /** @test */
    public function a_user_dashboard_should_display_news()
    {
        //Mock up user admin
        $user = factory(User::class)->create();
        $this->be($user);

        // Generate 30 fixtures for News table
        $news = factory(News::class, 30) ->create();

        $this->visit('/')
             ->see($news[0]->title);
    }
}
