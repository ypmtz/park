<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testYare()
    {
        $user = factory(\App\User::class)->create();

        $this->withoutExceptionHandling();
        dd(route('users.destroy', $user));
        $response = $this->json('DELETE', route('users.destroy', $user));

        // $response->dump();

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'eliminado',
            ]);

        $this->assertSoftDeleted('users', [
            'id'=> $user->id
        ]);



        // $response = $this->get('/');

        //  dd(env('DB_DATABASE', 'forge'));

        // $response->assertStatus(200);
    }
}
