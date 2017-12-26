@extends('layouts.app')

@section('css')

<link href="{{asset('aji/component/assets/css/profile4.css')}}" rel="stylesheet">
<link href="{{asset('aji/component/assets/css/photos1.css')}}" rel="stylesheet">


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="col-md-8 col-md-offset-2">

    @include('component.header-my-profile')

    <div class="photoContainer">
      <div class="row">
        <div class="col-md-12">
          <div class="photoHeader">
            <h4><i class="fa fa-picture-o"></i> Photos</h4>
            <div class="photoMenuTabs">
              <!-- <a href="profile_photo.html" >Photos of You</a> -->
              <a href="{{url('/user/'.$user->id.'/show/photos')}}" class="active">Your Photos</a>
              <a href="#">Albums</a>
            </div>
          </div>
          <div class="griPhoto">

            @if($user->id == Auth::user()->id)
            <div class="grid"  >
              <div  style="width: 100%; height: 100%; background: rgba(0,0,0,0.2);">
               <span class="glyphicon glyphicon-plus-sign text-center col-md-12" style=" font-size: 60px; margin-top: 30px; margin-bottom: 10px;"
               ></span>
               <span class="text-center col-md-12" >ADD PICTURE</span>
               <span  id="get-new-picture" style="position: absolute; width: 100%; height: 100%; z-index: 9; left:0; top:0;" >

               </span>
               <a class="show-image preview-image" id="show-image-1-x-trigger" preview-id="1-x" style="display: none;">
                <span></span>
              </a>

            </div>
          </div>
          <div id="show-image-1-x"  class="show-image-container" style="top: 100px;">
            <div class="row">

              <div class="col-md-8">
                <div class="modalImage">
                  <img src="" alt="" id="photo-view">
                </div>
              </div>
              <div class="col-md-4">
                <div class="box-header with-border">
                  <div class="user-block">
                    @if($user->profile_photo=='')

                    <img class="img-circle" src="http://localhost:8000/aji/component/img/Friends/guy-3.jpg" alt="User Image">
                    @else
                    <img class="img-circle" src="{{asset($user->profile_photo)}}" alt="User Image">
                    @endif
                    <span class="username"><a href="{{url('user/'.Auth::user()->id.'/show/timeline')}}">{{Auth::user()->name}}</a></span>
                    <span class="description"> <a href="#">National</a></span>
                  </div>

                </div>
                <form action="{{url('/user/photos')}}" method="post" id="" enctype="multipart/form-data" >
                  {{csrf_field()}}
                  <input type="file" id="user-new-photo" name="user_picture" accept="image/x-png,image/gif,image/jpeg"  style="display: none;" required="" >
                  <textarea class="input-lg p-text-area" id="textareaPost" placeholder="caption" required="" name="caption" style="min-height: 0px; height: 46px; box-shadow: none;"></textarea>


                  <div class="previewImageThumb">
                    <output id="listUploadImagesPost">
                      <!-- <a href="#" id="addMoreImages"><i class="fa fa-plus"></i></a> -->
                    </output>
                  </div>
                  <div class="box-footer box-form" id="boxFormPost">
                    <button type="Picture"  class="btn btn-azure pull-right" id="buttonPostStatus" disabled="disabled" >Upload</button>

                  </div>
                </form>
              </div>





            </div>
          </div>

          @endif





          <!-- grid -->
          @foreach($photos as $photo)
          <div class="grid">
            <div class="item-img-wrap" style="background-image: url('{{url($photo->url)}}');">
              <div class="item-img-overlay">
                <a class="show-image preview-image" preview-id="{{$photo->id}}">
                  <span></span>
                </a>

                @if($user->id==Auth::user()->id)

                <ul class="nav">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Remove Tag</a></li>
                    </ul>
                  </li>
                </ul>

                @endif



              </div>
            </div>
          </div>

          <div id="show-image-{{$photo->id}}" class="show-image-container" style="top: 100px;">
            <div class="row">
              <div class="col-md-8">
                <div class="modalImage">
                  <img src="{{url($photo->url)}}" alt="">
                </div>
              </div>

              <div class="col-md-4">
                <div class="modalPostCard">
                  <!--   posts -->
                  <div class="box box-widget box-timeline" id="postStatus4" post-id="4" post-url="">
                    <div class="box-header with-border">
                      <div class="user-block">
                         @if($user->profile_photo=='')
                    
                    <img class="img-circle" src="http://localhost:8000/aji/component/img/Friends/guy-3.jpg" alt="User Image">
                    @else
                    <img class="img-circle" src="{{asset($user->profile_photo)}}" alt="User Image">
                    @endif
                        <span class="username"><a href="{{url('user/'.$photo->FromUser->id.'/show/photos')}}">{{$photo->FromUser->name}}</a></span>
                        <span class="description">{{TimeG::gTime($photo->created_at)}} - <a href="#">National</a></span>
                      </div>
                      <div class="box-tools">
                        @if($user->id==Auth::user()->id)
                        <ul class="nav">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                            </ul>
                          </li>
                        </ul>
                        @endif
                      </div>
                    </div>

                    <div class="box-body" style="display: block;">
                      <p>{{$photo->caption}}</p>
                      <a class="btn btn-link btn-md postLike" id="postLike4" post-id="4">
                        <i class="fa fa-heart-o"></i> Like
                      </a>
                      <a class="btn btn-link btn-md postComment" id="postComment4" post-id="4">
                        <i class="fa fa-comment-o"></i> Comment
                      </a>
                      <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share">
                        <i class="fa fa-share"></i> Share
                      </a>
                      <span class="pull-right text-muted">
                        <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes">
                          127 likes
                        </a>
                      </span>
                    </div>
                    <div class="box-footer box-comments" style="display: block;">
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/woman-2.jpg')}}" alt="User Image">
                        <div class="comment-text">
                          <span class="username">
                            <a href="#">Maria Gonzales</a>
                            <a href="#"><span class="text-muted pull-right">x</span></a>
                          </span>
                          It is a long established fact that a reader will be distracted
                          by the readable content of a page when looking at its layout.
                          <div class="actionFooterPost">
                            <span id="likeComment4-1" class="likeComment">Like</span>
                            · 
                            <span id="replyComment4-1" class="replyComment">Reply</span>
                            · 
                            <span class="text-muted">8:03 PM Today</span>
                            <div class="replyCommentContainer">
                              <div class="replyCommentList ">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-3.jp')}}g" alt="User Image">
                                  <div class="comment-text">

                                    <div class="textAreaReply">
                                      <textarea name="" class="form-control input-sm"></textarea>
                                      <div class="buttonPostReply">
                                        <button class="btn btnReplyImage"><span class="fa fa-camera"></span></button>
                                        <button class="btn"><span class="fa fa-paper-plane-o"></span></button>
                                        <input type="file" name="fileReply" class="filesReply">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="box-comment">

                        <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="User Image">

                    
                        <div class="comment-text">
                          <span class="username">
                            <a href="#">Ariel Noah</a>
                            <a href="#"><span class="text-muted pull-right">x</span></a>
                          </span>
                          It is a long established fact that a reader will be distracted
                          by the readable content of a page when looking at its layout.
                          <div class="actionFooterPost">
                            <span id="likeComment4-1" class="likeComment">Like</span>
                            · 
                            <span id="replyComment4-1" class="replyComment">Reply</span>
                            · 
                            <span class="text-muted">8:03 PM Today</span>
                            <div class="replyCommentContainer">
                              <div class="replyCommentList ">
                                <div class="box-comment">
                                  <img class="img-circle img-sm" src="img/Friends/guy-3.jpg" alt="User Image">
                                  <div class="comment-text">

                                    <div class="textAreaReply">
                                      <textarea name="" class="form-control input-sm"></textarea>
                                      <div class="buttonPostReply">
                                        <button class="btn btnReplyImage"><span class="fa fa-camera"></span></button>
                                        <button class="btn"><span class="fa fa-paper-plane-o"></span></button>
                                        <input type="file" name="fileReply" class="filesReply">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!--  end posts -->

                  <div class="box-footer box-absolute">

                    @if($user->profile_photo=='')
                      <img class="img-circle img-sm" src="http://localhost:8000/aji/component/img/Friends/guy-3.jpg" alt="User Image">
                    @else
                     <img class="img-circle img-sm" src="{{asset($user->profile_photo)}}" alt="User Image">
                    @endif
                   
                    <div class="img-push">

                      <div class="textAreaReply">
                        <textarea name="" class="form-control input-sm writeComment" placeholder="Write a comment.."></textarea>
                        <div class="buttonPostReply">
                          <button class="btn btnReplyImage"><span class="fa fa-camera"></span></button>
                          <button class="btn"><span class="fa fa-paper-plane-o"></span></button>
                          <input type="file" name="fileReply" class="filesReply">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @endforeach
          <!-- end grid -->
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

<script type="text/javascript">

  $('#get-new-picture').click(function(){
    $('#user-new-photo').click();
  });

  document.getElementById('user-new-photo').addEventListener('change', showLandingPhoto, false);

  function showLandingPhoto(evt){
    $('#show-image-1-x-trigger').click();

    var file=(evt.target.files[0]);
    var reader = new FileReader();
    reader.onload= (function(thefile){

      return function(e){ 
        $('#photo-view').attr('src',e.target.result);
      }
    })(file);

    reader.readAsDataURL(file);


  }


  function handleFileSelect(evt) {
    var addMoreImages = $('#addMoreImages');
    var listThumb = $('.thumbPreviewImagePost').length;
    $(addMoreImages).addClass('showTrigger');
  // $('#buttonPostStatus').removeAttr('disabled');
  var files = evt.target.files;
  for (var i = 0, f; f = files[i]; i++) {
    if (!f.type.match('image.*')) {
      continue;
    }
    var reader = new FileReader();
    reader.onload = (function(theFile) {
      return function(e) {
        var span = document.createElement('span');
        span.innerHTML = ['<img class="thumbPreviewImagePost" src="', e.target.result,'" alt=""/>','<a class="deleteImagePost">x</a>'].join('');
        document.getElementById('listUploadImagesPost').insertBefore(span, null);
        $('.deleteImagePost').click(function(e) {
          $(this).parent().remove();
        });
      };
    })(f);

    reader.readAsDataURL(f);
  }
}
</script>



@stop