<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditAnswerTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testEditAnswer()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Login')
                ->type('email','dhruveen@gmkjh.com')
                ->type('password','qwerty')
                ->press('Login')
                ->assertSee('View')
                ->ClickLink('View')
                ->assertSee('Question')
                ->assertSee('Delete')
                ->assertSee('WSD IS601 is very good subject')
                ->assertSee('Delete')
                ->assertSee('Answer Question')
                ->ClickLink('View')
                ->assertSee('Answer')
                ->ClickLink('Edit Answer')
                ->assertSee('Create Answer')
                ->type('body','Excellent subject')
                ->press('Save')
                ->assertSee('Updated');
        });
    }
}
