<?php

namespace Tests\Feature;

use App\Reply;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }


    /** @test */
    public function a_user_can_see_all_threads()
    {
        $response = $this->get(route('threads.index'))
            ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $response = $this->get(
                route('threads.show', [$this->thread->category, $this->thread]))
            ->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_read_thread_replies()
    {
        $reply = factory(Reply::class)->create(['thread_id' => $this->thread->id]);

        $response = $this->get(
                route('threads.show', [$this->thread->category, $this->thread])
            )->assertSee($reply->body);
    }
}
