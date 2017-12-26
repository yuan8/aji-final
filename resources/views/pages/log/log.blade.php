@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-md-12">
            <div class="cover profile">
              <div class="wrapper">
                <div class="image">
                  <img src="{{asset('aji/component/img/Cover/profile-cover.jpg')}}" class="show-in-modal" alt="people">
                </div>
              </div>
              <div class="cover-info">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="people">
                </div>
                <div class="name">
                  <a href="##">John Breakgrow</a>
                  <div class="text-white"> Ketua Umum Bidang Datar Melengkung</div>
                </div>
                <ul class="cover-nav">
                  <li><a href="#"><i class="fa fa-fw fa-bars"></i> Timeline</a></li>
                  <li><a href="#"><i class="fa fa-fw fa-image"></i> Photos</a></li>
                </ul>
                <ul class="cover-nav coverButtonRight pull-right">
                  <li>
                    <a href="#" class="btn btn-azure pull-right">Edit Profile</a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-azure pull-right">Activity Log</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-12">
            <div class="profileActivity">
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-tag"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> was tagged in a <a href="#">post</a>. 
                    <small class="text-muted">- 2m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-comment-o"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> was commnted in a <a href="#">post</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-heart-o"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> liked a <a href="#">post</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-link"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> shared a <a href="#">link</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-camera"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> changed <a href="#">profile picture</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-calendar-check-o"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> joined an <a href="#">event</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-image"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> added 3 <a href="#">photos</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
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
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="activityIcon pull-left">
                  <i class="fa fa-at"></i>
                </div>
                <div class="media-body">
                  <p class="activity-title">
                    <a href="#">John Breakgrow</a> has mention in a <a href="#">comment</a>. 
                    <small class="text-muted">- 5m ago</small>
                  </p>
                  <div class="activity-actions">
                    <a href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
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

