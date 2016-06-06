<?php

use App\News;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NewsControllerTest extends TestCase
{
    use DatabaseTransactions, AuthTrait;

    /** @test */
    public function it_display_news_to_the_page()
    {
        $this->login();
        $news = factory(News::class)->create();
        $this->visit('/news')
            ->see($news->title);
    }

    /** @test */
    public function title_or_body_should_not_be_empty()
    {
        $this->login();
        $this->visit('news/create')
            ->submitForm('submit')
            ->seePageIs('news/create')
            ->see('The title field is required.')
            ->see('The body field is required.');
    }
    /** @test */
    public function admin_can_add_new_news()
    {
        $this->login();
        $new_news = factory(News::class)->make();
        $this->visit('news/create')
            ->type($new_news->title, 'title')
             ->type($new_news->body, 'body')
             ->press('submit')
             ->seeInDatabase('news', ['title' => $new_news->title])
             ->see('/news');
    }

    /** @test */
    public function admin_can_edit_news_entry()
    {
        $this->login();
        $news_to_edit = factory(News::class)->create();
        $edit_page = "/news/{$news_to_edit->id}/edit";

        $this->visit("news")
            ->seeText('edit')
            ->click('edit')
            ->seePageIs($edit_page)
            ->type('Update Title', 'title')
            ->press('submit')
            ->seePageIs($edit_page)
            ->seeText('Successfully Edited')
            ->see('Update Title');
    }

        /** @test */
    public function edit_page_body_should_not_be_empty()
    {
        $this->login();
        $news_to_edit = factory(News::class)->create();
        $edit_page = "/news/{$news_to_edit->id}/edit";

        $this->visit("news")
            ->see('edit')
            ->click('edit')
            ->seePageIs($edit_page)
            ->type('Update Title', 'title')
            ->type('', 'body')
            ->press('submit')
            ->seePageIs($edit_page)
            ->see('The body field is required.');
    }
}
