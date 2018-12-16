<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertTitle('Laravel')
                ->clickLink('Login')
                ->type('email', 'dhruveen@gmkjh.com')
                ->type('password', 'qwerty')
                ->press('Login')
                ->assertSee('Home')
                ->ClickLink('Create a Question')
                ->type('body', 'WSD IS601 is very good subject.')
                ->press('Save')
                ->assertSee('IT WORKS!')
                ->assertSee('Questions')
                ->ClickLink('View')
                ->assertSee('Question')
               // ->assertSee('WSD IS601 is very good subject')
                ->assertSee('Delete')
                ->assertSee('Edit Question')
                ->assertSee('Answer Question')
                ->clickLink('My Account')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
