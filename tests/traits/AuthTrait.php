<?php



trait AuthTrait
{
    /** @test */
    public function a_user_should_be_logged_in_to_accessed_the_page()
    {
        $this->visit('/')
             ->seePageIs('/login');
    }

    public function logIn()
    {
        $user = factory(App\User::class)->create();
        $this->be($user);
    }
}