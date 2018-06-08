<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Serie;
use App\Thread;

class ReadThreadsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_the_latest_threads()
    {
        $todayThread = factory(Thread::class)->create();
        $lastWeekThread = factory(Thread::class)->create();
        
        $lastWeekThread->created_at->subWeek();
        
        $this->get('/')
            ->assertSee($todayThread->title)
            ->assertSee($lastWeekThread->title);
        
        $latest = Thread::latest()->first();
        
        $this->assertEquals($latest->title, $todayThread->title);
    }

    /** @test */
    public function a_user_can_see_a_single_thread()
    {
        $thread = factory(Thread::class)->create();

        $this->get($thread->path())
            ->assertSee($thread->title)
            ->assertSee($thread->description)
            ->assertSee($thread->body);
    }

    /** @test */
    public function a_user_can_see_all_the_threads_related_to_a_serie()
    {
        $serie = factory(Serie::class)->create();
        
        $serieThread = factory(Thread::class)->create([
            "serie_id" => $serie->id,
        ]);

        $normalThread = factory(Thread::class)->create();

        $this->get("/series/{$serie->id}")
            ->assertSee($serieThread->title);
    }
}
