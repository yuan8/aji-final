@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<<div class="container page-content page-events ">
       <h3 style="margin-top:0; text-align:center;">Event History</h3>

      <div class="row">
        <div class="col-md-12">
          <div class="row events">
              @foreach($events as $event)
                  <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="media">
                          <img src="{{asset('aji/component/img/Photos/2.jpg')}}" alt="">
                        </div>
                      </div>
                      <div class="panel-body">
                        <h4 class="media-heading margin-v-5"><a href="#">{{$event->title}}</a></h4>
                        <ul class="event-deskripsi-list">
                          <li class="eventdate"><i class="fa fa-calendar-o"></i> {{TimeG::gTime($event->time)}}</li>
                          <li class="eventlokasi"><a href="#" target="_blank"><i class="fa fa-map-marker"></i>{{$event->address}}</a></li>
                          <li class="eventjoined"><i class="fa fa-check"></i> {{$event->joined_count}} peoples joined</li>
                        </ul>
                        <p class="common-events">
                         {{$event->content}}
                        </p>
                      </div>
                    </div>
                  </div>
              @endforeach
          </div>
        </div><!-- end left posts-->
      </div>
    </div>

@stop

@section('js')
<script type="text/javascript">
  function postNewPost(){
    $('#postNewPost').submit();
  }
</script>

@stop