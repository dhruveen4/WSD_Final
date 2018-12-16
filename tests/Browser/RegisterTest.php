<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://localhost:8000')
                ->assertSee('Laravel')
                ->clickLink('Register')
                ->type('email', 'dhruveen@gmkjhla.com')
                ->type('password', 'qwerty')
                ->type('password_confirmation', 'qwerty')
                ->press('Register')
                ->assertSee('Home');


        });
    }
}
