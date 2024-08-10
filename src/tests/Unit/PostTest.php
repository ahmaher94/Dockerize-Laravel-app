<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testPostCount(){
        User::factory()
            ->times(5)
            ->hasPosts(2)
            ->create();

        $this->assertDatabaseCount('posts', 10);
    }

    public function testRequestAllPosts(){
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
