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
            $browser->visit('/register')
               ->assertSee('Laravel')
                ->clickLink('Register')
                ->type('email', 'abc12@gmail.com')
                ->type('password', 'abc12123')
                ->type('password_confirmation', 'abc12123')
                ->press('Register')
                ->assertSee('Home')
                ->clickLink('My Account')
                ->clickLink('Create Profile')
                ->assertSee('My Profile')
                ->type('fname','Raj')
                ->type('lname','Andrew')
                ->type('body','I am a student')
                ->press('Save')
                ->assertSee('Profile Created');

        });
    }
}
