@extends('html')



@section('content')
<div class="row">
  <div class="col-sm-8 col-sm-push-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-heading">{{$event->title}}</h3>
      </div>
      <div class="panel-body">
        <p><strong>Description </strong></p>
        {{$event->description}}
      </div>
      <div id="map"></div>
      <table class="table table-bordered table-hover table-stripped">
        <tbody>
          <tr>
            <td><strong>Start Date :</strong></td>
            <td>{{$event->start_date}}</td>
          </tr>
          <tr>
            <td><strong>End Date :</strong></td>
            <td>{{$event->end_date}}</td>
          </tr>
          <tr>
            <td><strong>Address</strong></td>
            <td>{{$event->address}}</td>
          </tr>
          <tr>
            <td><strong>Created By</strong></td>
            <td>{{$event->creator->name}}</td>
          </tr>
          </tbody
      </table>
    </div>

  </div>
</div>
@endsection

@section('footer-script')
<script>
function initmap(){
  var uluru = {lat:{{$event->lat}},lang:{{$event->long}}};
  var map = new google.maps.Map(document.getElementByid('map'),{
    zoom : 8,
    center: {lat: -34.397, lng: 150.644}
  });

  var marker = new google.maps.Marker({
    posistion: uluru,
    map: map
  });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&callback=initmap" >
</script>
@endsection

@section('header-styles')

@endsection
