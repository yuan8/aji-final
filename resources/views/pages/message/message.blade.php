@extends('layouts.app')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('aji/component/assets/css/messages2.css')}}">

@stop

@section('content')
<!-- Begin page content -->
<div class="container page-content">
	<div class="row">
        <div class="col-md-12">
          <div class="tile tile-alt" id="messages-main">
            <div class="ms-menu">
                <div class="ms-user clearfix">
                  <div class="row">
                    <div class="col-md-6 col-sm-6" style="padding-left: 0;">
                      <a href="#" class="btn btn-azure show-in-modal" data-toggle="modal" data-target="#openNewMessage">
                        <i class="fa fa-plus"></i> New Message
                      </a>
                    </div>
                    <div class="col-md-6 col-sm-6" style="padding-left: 0;">
                      <a href="#" class="btn btn-azure show-in-modal" data-toggle="modal" data-target="#NewGroup">
                        <i class="fa fa-users"></i> Create Group
                      </a>
                    </div>
                  </div>
                </div>
                
                <div class="list-group lg-alt">
                  <ul class="nav nav-tabs nav-tabs-messages">
                    <li class="active">
                      <a href="#personal-tab" data-toggle="tab" aria-expanded="true">
                        Personal
                      </a>
                    </li>
                    <li class="">
                      <a href="#group-tab" data-toggle="tab" aria-expanded="false">
                        Group
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content" style="height: 464px; overflow: auto;">
                    <div class="tab-pane profile active" id="personal-tab">
                      <a class="list-group-item media" href="#">
                          <div class="pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Davil Parnell</div>
                              <small class="list-group-item-text c-gray">Fierent fastidii recteque ad pro</small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Ann Watkinson</div>
                              <small class="list-group-item-text c-gray">Cum sociis natoque penatibus </small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Marse Walter</div>
                              <small class="list-group-item-text c-gray">Suspendisse sapien ligula</small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="lv-avatar pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Jeremy Robbins</div>
                              <small class="list-group-item-text c-gray">Phasellus porttitor tellus nec</small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="lv-avatar pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-6.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Reginald Horace</div>
                              <small class="list-group-item-text c-gray">Quisque consequat arcu eget</small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-7.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Shark Henry</div>
                              <small class="list-group-item-text c-gray">Nam lobortis odio et leo maximu</small>
                          </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                          <div class="pull-left">
                              <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          </div>
                          <div class="media-body">
                              <div class="list-group-item-heading">Paul Van Dack</div>
                              <small class="list-group-item-text c-gray">Nam posuere purus sed velit auctor sodales</small>
                          </div>
                      </a>
                    </div>
                    <div class="tab-pane profile" id="group-tab">
                      <a class="list-group-item media" href="#">
                        <div class="pull-left">
                          <img src="{{asset('aji/component/img/logo-aji.png')}}" alt="" class="img-circle img-no-padding img-responsive">
                        </div>
                        <div class="media-body">
                          <div class="list-group-item-heading">AJI Indonesia</div>
                          <small class="list-group-item-text c-gray">Fierent fastidii recteque ad pro</small>
                        </div>
                      </a>
                      
                      <a class="list-group-item media" href="#">
                        <div class="pull-left">
                          <i class="fa fa-users" style="font-size: 20px;"></i>
                        </div>
                        <div class="media-body">
                          <div class="list-group-item-heading">Group 4</div>
                          <small class="list-group-item-text c-gray">Cum sociis natoque penatibus </small>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>

            <div class="ms-body">
                <div class="action-header clearfix">
                    <div class="visible-xs" id="ms-menu-trigger">
                        <i class="fa fa-bars"></i>
                    </div>
                    
                    <div class="pull-left hidden-xs">
                        <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle m-r-10">
                        <div class="headMesssageTitle">
                          <a href="#">David Parbell</a>
                          <br>
                          <span>Online</span>
                        </div>
                    </div>
                     
                    <ul class="ah-actions actions">
                      <li><a href="#"><i class="fa fa-trash"></i></a></li>
                      <li><a href="#"><i class="fa fa-refresh"></i></a></li>
                      <!-- <li class="dropdown">
                          <a href="#" data-toggle="dropdown" aria-expanded="true"><i class="fa fa-bars"></i></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Refresh</a></li>
                            <li><a href="#">Message Settings</a></li>
                          </ul>
                      </li> -->
                    </ul>
                </div>

                <div class="chatBody" style="height: 448px; overflow: auto;">
                  <div class="message-feed media">
                      <div class="pull-left">
                          <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                      </div>
                      <div class="media-body">
                          <div class="mf-content">
                              Quisque consequat arcu eget odio cursus, ut tempor arcu vestibulum. Etiam ex arcu, porta a urna non, lacinia pellentesque orci. Proin semper sagittis erat, eget condimentum sapien viverra et. Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.

                              <div class="chatOption">
                                <ul class="nav">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Reply</a></li>
                                      <li><a href="#">Delete</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                          </div>
                          <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2017 at 09:00</small>
                      </div>
                  </div>
                  
                  <div class="message-feed right">
                      <div class="pull-right">
                          <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsiver">
                      </div>
                      <div class="media-body">
                          <div class="mf-content">
                              Mauris volutpat magna nibh, et condimentum est rutrum a. Nunc sed turpis mi. In eu massa a sem pulvinar lobortis.
                              
                              <div class="chatOption">
                                <ul class="nav">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Reply</a></li>
                                      <li><a href="#">Delete</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                          </div>
                          <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2017 at 09:30</small>
                      </div>
                  </div>
                  
                  <div class="message-feed media">
                      <div class="pull-left">
                          <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                      </div>
                      <div class="media-body">
                          <div class="mf-content">
                              Etiam ex arcumentum
                              
                              <div class="chatOption">
                                <ul class="nav">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Reply</a></li>
                                      <li><a href="#">Delete</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                          </div>
                          <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2017 at 09:33</small>
                      </div>
                  </div>
                  
                  <div class="message-feed right">
                      <div class="pull-right">
                          <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                      </div>
                      <div class="media-body">
                          <div class="mf-content">
                              Etiam nec facilisis lacus. Nulla imperdiet augue ullamcorper dui ullamcorper, eu laoreet sem consectetur. Aenean et ligula risus. Praesent sed posuere sem. Cum sociis natoque penatibus et magnis dis parturient montes,
                              
                              <div class="chatOption">
                                <ul class="nav">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Reply</a></li>
                                      <li><a href="#">Delete</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                          </div>
                          <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2017 at 10:10</small>
                      </div>
                  </div>
                  
                  <div class="message-feed media">
                      <div class="pull-left">
                          <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                      </div>
                      <div class="media-body">
                          <div class="mf-content">
                              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac tortor ut elit sodales varius. Mauris id ipsum id mauris malesuada tincidunt. Vestibulum elit massa, pulvinar at sapien sed, luctus vestibulum eros. Etiam finibus tristique ante, vitae rhoncus sapien volutpat eget
                              
                              <div class="chatOption">
                                <ul class="nav">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">Reply</a></li>
                                      <li><a href="#">Delete</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                          </div>
                          <small class="mf-date"><i class="fa fa-clock-o"></i> 20/02/2017 at 10:24</small>
                      </div>
                  </div>
                </div>

                <div class="chatReply">
                  <output id="listUploadImagesPost">
                  </output>
                  <div class="msb-reply">
                    <textarea placeholder="Write here..."></textarea>
                    <button><i class="fa fa-paper-plane-o"></i></button>
                    <button id="cameraPost"><i class="fa fa-camera"></i></button>
                    <input type="file" id="files" name="files[]" multiple="">
                  </div>
                </div>
            </div>
          </div><!-- end  center posts -->
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