@extends('html')
@section('content')

<div  class="row">
  <div class="col-sm-8.col-sm-push-2">
      <h1>UpComing Events</h1>
@foreach ($upComingEvents as $upComingEvent)
      <div class="panel panel-default">
          <div class="panel-heading">

            <h3 class="panel-heading">
              <a href="{{route('event-view',$upComingEvent->id)}}">{{$upComingEvent->id}}{{$upComingEvent->title}}</a> 
            </h3>
            <small>{{$upComingEvent->address}}</small>
          </div>
          <div class="panel-body">
              <div class="meta-data">
                <strong>Start Date</strong>{{$upComingEvent->start_date}}
                <br>
                <strong>End Date</strong>{{$upComingEvent->end_date}}
                <br>
                <strong>Created by:</strong>{{$upComingEvent->creator->name}}
              </div>
              <div class="description">
                <p>{{$upComingEvent->description}}</p>

              </div>
          </div>
      </div>
@endforeach
  </div>
</div>

@endsection
