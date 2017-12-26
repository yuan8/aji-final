@extends('layouts.app')

@section('css')
<style type="text/css">
.select-custome option{

  background: #fff !important;
  float: right;

}

</style>

@stop


@section('content')




<!-- Begin page content -->
<div class="container page-content" data-sticky-parent>

  <div class="row">
    <!-- left links -->
    <div class="col-md-3 hidden-sm hidden-xs">
      @include('component.box-menu-control-user')
    </div><!-- end left links -->

    <!-- center posts -->
    <div class="col-md-6 col-sm-8" style="min-height: 800px;">
      <div class="stickparent" data-sticky-column>
        <div class="row">
          <!-- left posts-->
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <!-- post state form -->
                <div class="box profile-info n-border-top">
                  <form action="{{url('post')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <textarea name="content" class="input-lg p-text-area" id="textareaPost" placeholder="Whats on your mind?"></textarea>
                    
                    <div class="previewImageThumb">
                      <output id="listUploadImagesPost">
                        <!-- <a href="#" id="addMoreImages"><i class="fa fa-plus"></i></a> -->
                      </output>
                    </div>
                    <div class="box-footer box-form" id="boxFormPost">
                      <button type="submit" class="btn btn-azure pull-right" id="buttonPostStatus" disabled="disabled">Post</button>
                      <ul class="nav nav-pills">
                        <li>
                          <a href="#" id="cameraPost"><i class="fa fa-camera"></i></a>
                          <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg"  name="files[]" multiple />
                        </li>
                        <li>
                          <select  id="channelPost" class="form-control" name="kanal">
                            <option value="0" >National </option>

                            <option value="{{Auth::user()->FromCity->id}}" >Kota {{Auth::user()->FromCity->name}} 
                            </option>
                            

                          </select>
                        </li>
                      </ul>
                    </div>
                  </form>

                </div><!-- end post state form -->

                <div class="boxFilter">
                  <ul>
                    <li class=" @if($post_sorting =='terkini') 
                    active 
                    @endif }}">
                    <button class="filterPost" data-filter="terkini" onclick="filteringPost('terkini')">
                      <span class="fa fa-chevron-circle-up"></span> 
                      <span class="filterText"></span>Terkini
                    </button>
                  </li>
                  <li class="
                  @if($post_sorting =='terpopuler') 
                  active 
                  @endif }}">
                  <button class="filterPost" data-filter="terpopuler" onclick="filteringPost('terpopuler')">
                    <span class="fa fa-star"></span> 
                    <span class="filterText">Terpopuler</span>
                  </button>
                </li>
                <li class="@if($post_sorting =='terhangat') 
                active 
                @endif }}">
                <button class="filterPost" data-filter="terhangat" onclick="filteringPost('terhangat')">
                  <span class="fa fa-fire"></span> 
                  <span class="filterText">Terhangat</span>
                </button>
              </li>
            </ul>
          </div>




          @if(Gate::allows('access-nation-admin', Auth::user()))
          <div class="boxFilter">
            <select data-placeholder="Select a city" class="chosen-select" tabindex="1" id="selectCity" onChange="changeCity(this)">
              @if($select_city==0){
              <option value="0" selected="">National</option>
              @else
              <option value="0" >National</option>

              @endif
              @foreach($cities as $city)

              @if($city->id==$select_city)
              <option value="{{$city->id}}" selected>{{$city->name}}</option>
              @else
              <option value="{{$city->id}}">{{$city->name}}</option>
              @endif

              @endforeach
            </select>
          </div>

          @else
          <div class="boxFilter" style="padding: 10px;">
            <select data-placeholder="Select a city" class="form-control select-custome " tabindex="1" id="selectCity" onChange="changeCity(this)" style="background: transparent; border: none; box-shadow: none; color: #777; font-size: 14px; padding: 0 0 0 20px; border:1px solid #ccc; height: 40px; border-radius: 2px; text-align-last: center;
            text-align: center; ">
            @if($select_city==0)
            <option value="0" selected="">National </option>

            @elseif($select_city!=0)
            <option value="0" >National </option>

            @endif

            @if($select_city!=0)
            <option value="{{Auth::user()->FromCity->id}}" selected="">Kota {{Auth::user()->FromCity->name}} 
            </option>

            @else
            <option value="{{Auth::user()->FromCity->id}}" >Kota {{Auth::user()->FromCity->name}} 
            </option>
            @endif


          </select>


        </div>

        @endif



        <div class="stickyPost">
          <div class="stickySign">
            <span class="fa fa-thumb-tack"></span>
          </div>
          <ul class="bxslider">
            <li>
              <!--  posts -->
              <div class="box box-widget box-timeline" id="postStatus3" post-id="3" post-url="">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">John Breakgrow jr.</a></span>
                    <span class="description">7:30 PM Today - <a href="#">National</a></span>
                  </div>
                  <div class="box-tools">
                    <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Unsticky</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Edit</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="box-body" style="display: block;">
                  <div class="body-status">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac iaculis ligula, eget efficitur nisi. In vel rutrum orci. Etiam ut orci volutpat, maximus quam vel, euismod orci. Nunc in urna non lectus malesuada aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dignissim mi ac metus consequat, a pharetra neque molestie. Maecenas condimentum lorem quis vulputate volutpat. Etiam sapien diam
                    </p>
                  </div>
                  <p class="read-more"></p>
                  <a class="btn btn-link btn-md postLike" id="postLike3" post-id="3">
                    <i class="fa fa-heart-o"></i> Like
                  </a>
                  <a href="post_detail.html" class="btn btn-link btn-md postComment" id="postComment3" post-id="3">
                    <i class="fa fa-comment-o"></i> Comment
                  </a>
                  <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share">
                    <i class="fa fa-share"></i> Share
                  </a>
                  <span class="pull-right text-muted">
                    <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes">
                      127 likes - 3 comments
                    </a>
                  </span>
                </div>
              </div><!--  end posts -->
            </li>

            <li>
              <!--   posts -->
              <div class="box box-widget box-timeline" id="postStatus1" post-id="1" post-url="">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('aji/component/img/Friends/guy-7.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">Steve Jobs</a></span>
                    <span class="description">7:30 PM Today - <a href="#">National</a></span>
                  </div>
                  <div class="box-tools">
                    <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Unsticky</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Edit</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="box-body" style="display: block;">
                  <div class="body-status">
                    <img class="img-responsive show-in-modal" src="{{asset('aji/component/img/Post/young-couple-in-love.jpg')}}" alt="Photo">
                    <p>
                      I took this photo this morning. What do you guys think?
                    </p>
                  </div>
                  <p class="read-more"></p>
                  <a class="btn btn-link btn-md postLike" id="postLike1" post-id="1">
                    <i class="fa fa-heart-o"></i> Like
                  </a>
                  <a href="post_detail.html" class="btn btn-link btn-md postComment" id="postComment1" post-id="1">
                    <i class="fa fa-comment-o"></i> Comment
                  </a>
                  <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share">
                    <i class="fa fa-share"></i> Share
                  </a>
                  <span class="pull-right text-muted">
                    <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes">
                      127 likes - 3 comments
                    </a>
                  </span>
                </div>
              </div><!--  end posts-->
            </li>

            <li>
              <!--   posts -->
              <div class="box box-widget box-timeline" id="postStatus1" post-id="1" post-url="">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('aji/component/img/Friends/guy-1.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">Michael Essien</a></span>
                    <span class="description">7:30 PM Today - <a href="#">National</a></span>
                  </div>
                  <div class="box-tools">
                    <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Unsticky</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Edit</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="box-body" style="display: block;">
                  <div class="body-status">
                    <p>
                      Far far away, behind the word mountains, far from the
                      countries Vokalia and Consonantia, there live the blind
                      texts. Separated they live in Bookmarksgrove right at
                    </p>

                    <div class="attachment-block clearfix">
                      <img class="attachment-img" src="{{asset('aji/component/img/Photos/2.jpg')}}" alt="Attachment Image">
                      <div class="attachment-pushed">
                        <h5 class="attachment-heading">
                          <a href="http://www.maskod.co.id.com/">Lorem ipsum text generator</a>
                        </h5>
                        <div class="attachment-text">
                          Description about the attachment can be placed here.
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="home.html#">more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="read-more"></p>
                  <a class="btn btn-link btn-md postLike" id="postLike1" post-id="1">
                    <i class="fa fa-heart-o"></i> Like
                  </a>
                  <a href="post_detail.html" class="btn btn-link btn-md postComment" id="postComment1" post-id="1">
                    <i class="fa fa-comment-o"></i> Comment
                  </a>
                  <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share">
                    <i class="fa fa-share"></i> Share
                  </a>
                  <span class="pull-right text-muted">
                    <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes">
                      127 likes - 3 comments
                    </a>
                  </span>
                </div>
              </div><!--  end posts-->
            </li>

            <li>
              <!--   posts -->
              <div class="box box-widget box-timeline" id="postStatus1" post-id="1" post-url="">
                <div class="box-header with-border">
                  <div class="user-block">
                    <img class="img-circle" src="{{asset('aji/component/img/Friends/woman-2.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">Siti Aminah</a></span>
                    <span class="description">7:30 PM Today - <a href="#">National</a></span>
                  </div>
                  <div class="box-tools">
                    <ul class="nav">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Unsticky</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Edit</a></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="box-body" style="display: block;">
                  <div class="body-status">
                    <p>
                      Alhamdulillahirobbilalamin... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde accusamus, illum error. Similique amet quis dicta, explicabo, voluptates, asperiores, molestias nulla nemo molestiae voluptatem voluptatibus voluptatum non enim debitis quos!
                    </p>
                  </div>
                  <p class="read-more"></p>
                  <a class="btn btn-link btn-md postLike" id="postLike1" post-id="1">
                    <i class="fa fa-heart-o"></i> Like
                  </a>
                  <a href="post_detail.html" class="btn btn-link btn-md postComment" id="postComment1" post-id="1">
                    <i class="fa fa-comment-o"></i> Comment
                  </a>
                  <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share">
                    <i class="fa fa-share"></i> Share
                  </a>
                  <span class="pull-right text-muted">
                    <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes">
                      127 likes - 3 comments
                    </a>
                  </span>
                </div>
              </div><!--  end posts-->
            </li>
          </ul>
        </div>
        @foreach($posts as $post)

        @include('component.post')

        @endforeach




      </div>
    </div>
  </div><!-- end left posts-->
</div>
</div>
</div><!-- end  center posts -->

<!-- right posts -->
<div class="col-md-3 col-sm-4" >
  <div class="stickparent" data-sticky-column>
    <!-- Friends activity -->
    <div class="widget">
      <div class="widget-header">
        <h3 class="widget-caption"><i class="fa fa-users"></i> Friends activity</h3>
      </div>
      <div class="widget-body bordered-top bordered-sky">
        <div class="card">
          <div class="content">
           <ul class="list-unstyled team-members">

            @foreach($friendActivities as $friendActivity)
            <li>
              <div class="row">
                <div class="col-xs-3">
                  <div class="avatar">
                    <img src="{{asset('aji/component/img/Friends/woman-2.jpg')}}" alt="img" class="img-circle img-no-padding img-responsive">
                  </div>
                </div>
                <div class="col-xs-9">
                  <b><a href="{{url('user/'.$friendActivity->id.'/show/timeline')}}">{{$friendActivity->name}}</a></b> shared a 
                  <b><a href="post_detail.html">post</a></b>. 
                  <span class="timeago" >5 min ago</span>
                </div>
              </div>
            </li>
            @endforeach


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
            @foreach($events as $event)
            
            <li>
              <div class="row">
                <div class="col-xs-8">
                 <a href="events_details.html">{{$event->title}}</a><br>
                 <span>{{$event->joined_count}} peoples joined</span>
               </div>

               <div class="col-xs-4 text-right">
                <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
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
</div>

<div class="modal fade modal-small" id="modal-likes" tabindex="-1" role="dialog" aria-labelledby="modal-likes">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-likes">127 Likes</h4>
      </div>
      <div class="modal-body text-centers">
        <div class="table-responsive">
          <table class="table user-list">
            <tbody>
              <tr>
                <td>
                  <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                  <a href="#" class="user-link">John Doe</a>
                  <span class="user-subhead">Ketua Umum</span>
                </td>
                <td>
                  <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                    <a href="#" class="user-link">John Doe</a>
                    <span class="user-subhead">Wakil</span>
                  </td>
                  <td>
                    <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                      <a href="#" class="user-link">John Doe</a>
                      <span class="user-subhead">Bendahara</span>
                    </td>
                    <td>
                      <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                        <a href="#" class="user-link">John Doe</a>
                        <span class="user-subhead">Anggota</span>
                      </td>
                      <td>
                        <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                          <a href="#" class="user-link">John Doe</a>
                          <span class="user-subhead">Anggota</span>
                        </td>
                        <td>
                          <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                            <a href="#" class="user-link">John Doe</a>
                            <span class="user-subhead">Anggota</span>
                          </td>
                          <td>
                            <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                              <a href="#" class="user-link">John Doe</a>
                              <span class="user-subhead">Anggota</span>
                            </td>
                            <td>
                              <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                                <a href="#" class="user-link">John Doe</a>
                                <span class="user-subhead">Anggota</span>
                              </td>
                              <td>
                                <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                                  <a href="#" class="user-link">John Doe</a>
                                  <span class="user-subhead">Anggota</span>
                                </td>
                                <td>
                                  <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                                    <a href="#" class="user-link">John Doe</a>
                                    <span class="user-subhead">Anggota</span>
                                  </td>
                                  <td>
                                    <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    @stop


                    @section('js')


                    <script type="text/javascript">
                      var postsortingBy="{{$post_sorting}}";

                      $(function() {
                        $('.chosen-select').chosen();
                      });

                      function filteringPost(data){
                        var city=($('#selectCity').val());
                        if(city==undefined){
                          city="{{Auth::user()->FromCity->id}}";
                        }
                        location.href="{{url('home')}}/"+data+"/"+city;
                      }

                      function changeCity($ev){
                        location.href="{{url('home')}}/"+postsortingBy+"/"+$ev.value;

                      }

                      $(function(){
                        $('buttonPostStatus').html('Post');
                      });



                    </script>

                    @stop