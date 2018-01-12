<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ModeratorAccessTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModeratorAccessTest()
    {
        factory(Post::class)->create();

        $user = factory('App\User')->create(['name' => 'NotModerator']);

        $this->actingAs($user)
            ->get('posts')
            ->assertRedirect('/');
    }
}
