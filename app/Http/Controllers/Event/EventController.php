<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Modules\Event\Event;

class EventController extends Controller
{

    public function index()
    {

      $today = Carbon::today()->format('Y-m-d');

      $upComingEvents = Event::where('end_date', ">", $today)->get();

      $pastEvents = Event::where('end_date', "<", $today)->get();

      return view('events.event-list')->with('upComingEvents', $upComingEvents)->with('pastEvents', $pastEvents);
    }

    public function view(Event $event)

    {
          return view('events.event-view')->with('event',$event);
    }
}
