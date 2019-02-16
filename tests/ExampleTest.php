<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */

    use DatabaseTransactions;

    public function testBasicExample()
    {   

    
        $user = factory(\App\User::class)->create([
            'name' => 'Marcos',
            'email' =>'admin@styde.com',
        ]);


        $this->actingAs($user,'api')
            ->visit('api/user')
             ->see('Marcos')
             ->see('admin@styde.com');
    }
}
