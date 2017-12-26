@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="container page-content">
  <div class="row">
        <!-- left links -->
        <div class="col-md-3 hidden-sm hidden-xs">
          @include('component.box-menu-control-user')
        </div><!-- end left links -->

        <!-- center posts -->
        <div class="col-md-6 col-sm-8">
          <div class="stickparent" data-sticky-column="">
            <h3 style="margin-top: 0;">Notications</h3>
            <div class="row">
              <!-- left posts-->
              <div class="col-md-12">

                <div class="profileActivity">
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-tag"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">You</a> was tagged in a <a href="#">post</a>. 
                        <small class="text-muted">- 2m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">John Breakgrow</a> was commneted with you in a <a href="#">post</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-heart-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Essien</a> liked a your <a href="#">post</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-image"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Cristiano Ronaldo</a> shared a <a href="#">photo</a> of you. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Event satu</a> has been start. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-image"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Jajang Nurjaman</a> added 3 <a href="#">photos</a> of you. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Maria Gonzales</a> wrote on you <a href="#">timeline</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-at"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Steve Jobs</a> has mention you in a <a href="#">comment</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-tag"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">You</a> was tagged in a <a href="#">post</a>. 
                        <small class="text-muted">- 2m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-comment-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">John Breakgrow</a> was commneted with you in a <a href="#">post</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-heart-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Essien</a> liked a your <a href="#">post</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-image"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Cristiano Ronaldo</a> shared a <a href="#">photo</a> of you. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-calendar-check-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Event satu</a> has been start. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-image"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Jajang Nurjaman</a> added 3 <a href="#">photos</a> of you. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-pencil-square-o"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Maria Gonzales</a> wrote on you <a href="#">timeline</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                  <div class="media activity-item">
                    <div class="activityIcon pull-left">
                      <i class="fa fa-at"></i>
                    </div>
                    <div class="media-body">
                      <p class="activity-title">
                        <a href="#">Steve Jobs</a> has mention you in a <a href="#">comment</a>. 
                        <small class="text-muted">- 5m ago</small>
                      </p>
                    </div>
                  </div>
                </div>

              </div><!-- end left posts-->
            </div>
          </div>
        </div><!-- end  center posts -->

        <!-- right posts -->
        <div class="col-md-3 col-sm-4">
          <div class="stickparent" data-sticky-column="" style="">
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
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">Event satu dua tiga</a><br>
                                       <span>120 peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">Event satu dua tiga</a><br>
                                       <span>22 peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">Event satu dua tiga</a><br>
                                       <span>13 peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">Event satu dua tiga</a><br>
                                       <span>13 peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                       <a href="#">Event satu dua tiga</a><br>
                                       <span>13 peoples joined</span>
                                    </div>
                        
                                    <div class="col-xs-4 text-right">
                                        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>          
              </div>
            </div><!-- End people yout may know -->
          </div>

        </div><!-- end right posts -->
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