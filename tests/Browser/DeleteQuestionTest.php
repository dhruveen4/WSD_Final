<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DeleteQuestionTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email','dhruveen@gmkjh.com')
                ->type('password','qwerty')
                ->press('Login')
                ->assertSee('Home')
                ->assertSee('View')
                ->ClickLink('View')
                ->assertSee('Question')
                ->assertSee('Answer Question')
                ->assertSee('Delete')
              //  ->assertSee('WSD IS601 is very good subject.')
                ->assertSee('Delete')
                //->press('Delete')
                //->assertSee('Deleted')
                ->ClickLink('My Account')
                ->ClickLink('Logout');
        });
    }
}
