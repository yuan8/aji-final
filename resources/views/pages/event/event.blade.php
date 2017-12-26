@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="container page-content page-events">
        <div class="col-md-9">
          <div class="stickparent" data-sticky-column="">
            <div class="row">
              <div class="col-md-12">
                <div class="row events">
                  
                  @foreach($events as $event)
                  <div class="col-md-6">
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
                          <li class="eventlokasi"><a href="#" target="_blank"><i class="fa fa-map-marker"></i> {{$event->address}}</a></li>
                          <li class="eventjoined">
                            <a class="" data-toggle="modal" data-target="#modal-joined"><i class="fa fa-check"></i>
                              {{$event->joined_count}} peoples joined
                            </a>
                          </li>
                        </ul>
                        <p class="common-events">
                         {{$event->content}}
                        </p>
                      </div>
                      <div class="panel-footer">
                        <a href="#" class="btn btn-azure btn-block" data-toggle="modal" data-target="#modal-event-{{$event->id}}">JOIN</a>
                      </div>
                    </div>
                  </div>

                  <div id="modal-event-{{$event->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirmation Join Event</h4>
                          </div>
                          <div class="modal-body">
                             <div class="panel-body">
                              <h4 class="media-heading margin-v-5"><a href="#">{{$event->title}}</a></h4>
                              <ul class="event-deskripsi-list">
                                <li class="eventdate"><i class="fa fa-calendar-o"></i> {{TimeG::gTime($event->time)}}</li>
                                <li class="eventlokasi"><a href="#" target="_blank"><i class="fa fa-map-marker"></i> {{$event->address}}</a></li>
                                <li class="eventjoined">
                                  <a class="" data-toggle="modal" data-target="#modal-joined"><i class="fa fa-check"></i>
                                    {{$event->joined_count}} peoples joined
                                  </a>
                                </li>
                              </ul>
                              <p class="common-events">
                               {{$event->content}}
                              </p>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <form action="event/joined" method="post">
                                {{csrf_field()}}
                                <input type="number" name="event_id" value="{{$event->id}}" style="display: none;">
                                <div class="btn-group">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-azure">Join</button>
                                </div>
                            </form>
                            
                          </div>
                        </div>

                      </div>
                    </div>
                  @endforeach
                  
           
        
                  

                </div>
              </div><!-- end left posts-->
            </div>
          </div>
        </div><!-- end  center posts -->

        <!-- right posts -->
        <div class="col-md-3">
          <div class="stickparent" data-sticky-column="">
            <!-- Event Tool -->
            <div class="widget">
              <div class="widget-header">
                <h3 class="widget-caption"><i class="fa fa-gear"></i> Sort by</h3>
              </div>
              <div class="widget-body bordered-top bordered-sky">
                <div class="card">
                  <div class="content">
                    <div class="eventSort">
                      <ul class="nav bordered">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Default <i class="fa fa-chevron-down pull-right"></i>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('events')}}">Published Date</a></li>
                            <li><a href="{{url('events/?q=upcoming')}}">Upcoming Events</a></li>
                            <li><a href="{{url('events/?q=past')}}">Past Event</a></li>
                            <li><a href="{{url('events/?q=upcoming')}}">Popular Event</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>       
                  </div>
                </div>
              </div>
            </div><!-- End Event Tool -->
            <!-- Friends activity -->
            <div class="widget">
              <div class="widget-header">
                <h3 class="widget-caption"><i class="fa fa-users"></i> Friends activity</h3>
              </div>
              <div class="widget-body bordered-top bordered-sky">
                <div class="card">
                  <div class="content">
                     <ul class="list-unstyled team-members">
                      <li>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="avatar">
                                <img src="{{asset('aji/component/img/Friends/woman-2.jpg')}}" alt="img" class="img-circle img-no-padding img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <b><a href="#">Hillary Markston</a></b> shared a 
                            <b><a href="#">post</a></b>. 
                            <span class="timeago">5 min ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="avatar">
                                <img src="{{asset('aji/component/img/Friends/woman-3.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <b><a href="#">Leidy marshel</a></b> liked a 
                            <b><a href="#">post</a></b>. 
                            <span class="timeago">5 min ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="avatar">
                                <img src="{{asset('aji/component/img/Friends/woman-4.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <b><a href="#">Presilla bo</a></b> comment a 
                            <b><a href="#">post</a></b>. 
                            <span class="timeago">5 min ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-xs-3">
                              <div class="avatar">
                                  <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                              </div>
                          </div>
                          <div class="col-xs-9">
                            <b><a href="#">Martha markguy</a></b> shared a 
                            <b><a href="#">post</a></b>. 
                            <span class="timeago">5 min ago</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="row">
                          <div class="col-xs-3">
                              <div class="avatar">
                                  <img src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                              </div>
                          </div>
                          <div class="col-xs-9">
                            <b><a href="#">Essien</a></b> shared a 
                            <b><a href="#">post</a></b>. 
                            <span class="timeago">5 min ago</span>
                          </div>
                        </div>
                      </li>
                    </ul>         
                  </div>
                </div>
              </div>
            </div><!-- End Friends activity -->

            <!-- People You May Know -->
            <div class="widget">

              <div class="widget-header">
                <h3 class="widget-caption"><i class="fa fa-calendar"></i> Events You May Know</h3>
              </div>
              <div class="widget-body bordered-top bordered-sky">
                <div class="card">
                    <div class="content">
                        <ul class="list-unstyled team-members">
                          @foreach($events_know as $event)
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">{{$event->title}}</a><br>
                                       <span>{{$event->joined_count}} peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon" style="font-size:7px;">{{TimeG::gTime($event->time)}}</btn>
                                    </div>
                                </div>
                            </li>

                            @endforeach
                            
                        </ul>
                    </div>
                </div>          
              </div>
            </div><!-- End people yout may know -->
          </div>
        </div><!-- end right posts -->
</div>

@stop

@section('js')
<script type="text/javascript">
  function postNewPost(){
    $('#postNewPost').submit();
  }
</script>

@stop