<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditProfileTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEditProfile()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email', 'abc@gmail.com')
                ->type('password', 'abc123')
                ->press('Login')
                ->assertSee('Home')
                ->clickLink('My Account')
                ->clickLink('My Profile')
                ->assertSee('My Profile')
                ->assertSee('Raj')
                ->clickLink('Edit')
                ->assertSee('My Profile')
                ->type('fname','Joe')
                ->type('lname','Andy')
                ->type('body','I am a Graduate student')
                ->press('Save')
                ->assertSee('Updated Profile')
                ->clickLink('My Account')
                ->clickLink('Logout')
                ->assertTitle('Laravel');
        });
    }
}
