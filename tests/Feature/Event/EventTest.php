<?php

namespace Tests\Feature\Event;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Modules\Event\Event;

class EventTest extends TestCase
{
  use DatabaseMigrations;

  public function a_user_can_see_list_of_events(){
    $event = factory(Event::class)->create();

    $this->get(route('events'))
    ->assertStatus(200)
    ->assertSeeText($event->title);
  }
}
