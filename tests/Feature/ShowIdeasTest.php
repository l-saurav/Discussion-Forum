<?php

namespace Tests\Feature;

use App\Models\discussion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function list_of_discussions_shows_on_main_page()
    {
        $discussionOne = discussion::factory()->create([
            'title' => 'My First Discussion',
            'description' => 'Description of my first discussion',
        ]);
        $discussionTwo = discussion::factory()-> create([
            'title' => 'My Second Discussion',
            'description' => "Description of my second Discussion",
        ]);
        $response = $this->get(route('discussion.index'));
        $response->assertSuccessful();
        $response->assertSee($discussionOne->title);
    }
}
