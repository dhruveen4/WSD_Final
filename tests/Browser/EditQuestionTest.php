<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EditQuestionTest extends DuskTestCase
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
                ->assertSee('Delete');
               // ->assertSee('WSD IS601 is very good subject.')
               /* ->assertSee('Edit Question')
                ->ClickLink('Edit Question')*/
               // ->assertSee('Create Question');
                /*->type('body','How are you all?')
                ->press('Save')
                ->assertSee('Saved');*/
        });
    }
}
