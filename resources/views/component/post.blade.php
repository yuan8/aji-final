<!-- post -->
<div class="box box-widget box-timeline" id="postStatus2" post-id="2" post-url="">
  <div class="box-header with-border">
    <div class="user-block">
      @if($post->fromUser->profile_photo=='')
      <img class="img-circle" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
      @else
      <img class="img-circle" src="{{asset($post->fromUser->profile_photo)}}" alt="User Image">

      @endif
      <span class="username">
        <a href="{{url('/user/'.$post->FromUser->id.'/show/timeline')}}">{{$post->FromUser->name}}</a>
      </span>

      <span class="description">

        <span class="">{{TimeG::gTime(Carbon\Carbon::parse($post->created_at)->diffForHumans())}}</span> - 

        @if($post->kanal=='national')
        <a href="#">National</a></span>
        @elseif($post->kanal=='kota')
        <a href="#">{{$post->FromCity->name}}</a></span>
        @endif

      </div>
      <div class="box-tools">
        <ul class="nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Make Sticky</a></li>
              <li class="divider"></li>
              <li><a href="#">Edit</a></li>
              <li><a href="#">Delete</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="box-body">
      @if(count($post->HavePostFilePictures)>1)
      <div class="slider-in-post" >
        <ul class="bxslider">
          @foreach($post->HavePostFilePictures as $picture)
          <li><div style="position: relative; max-height: 300px; overflow: hidden;">
            <img class="img-responsive pad" src="{{url($picture->url)}}" alt="Photo" style=" ">
          </div></li>
          @endforeach
        </ul>
      </div>
      @else
      @foreach($post->HavePostFilePictures as $picture)
      <div style="position: relative; max-height: 300px; overflow: hidden;">
        <img class="img-responsive pad" src="{{url($picture->url)}}" alt="Photo" style=" ">
      </div>
      @endforeach
      @endif
      
      <div id="post-content-preview-{{$post->id}}">
        @if(count($post->HavePostFilePictures) >0)
        <p style="padding: 10px;" >{{substr($post->content, 0, 430)}}
          @if(strlen($post->content)>430)
          <a id="content-post-{{$post->id}}" class="more" onclick="moreContentPost({{$post->id}})" style="color: #777; font-size: 14px; font-weight: bold;" > . . . More </a>
          @endif
        </p>
        @else
        <p style="padding: 10px;">{{substr($post->content, 0, 790)}}
          @if(strlen($post->content)>790)
          <a id="content-post-{{$post->id}}" class="more" onclick="moreContentPost({{$post->id}})"   style="color: #777; font-size: 14px; font-weight: bold;" > . . . More</a>
          @endif
        </p>
        @endif
      </div>
      <div id="post-content-full-{{$post->id}}" class="animated fadeIn" style="display: none;">
        <p style="padding: 10px;">{{$post->content}}</p>
      </div>

      <!-- <div class="attachment-block clearfix">
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
      </div> -->
      @if($post->me_like_count > 0)
      <a class="btn btn-link btn-md active"  id="likePost-view-{{$post->id}}" onclick='likePostEvent({{$post->id}},"{{url('api/v1/like')}}/")'>
        <i class="fa fa-heart"></i> Liked
      </a>
      @else
      <a class="btn btn-link btn-md"  id="likePost-view-{{$post->id}}" onclick='likePostEvent({{$post->id}},"{{url('api/v1/like')}}/")'>
        <i class="fa fa-heart-o"></i> Like
      </a>
      @endif

      <a class="btn btn-link btn-md postComment" id="postComment2" post-id="2">
        <i class="fa fa-comment-o"></i> Comment
      </a>
      <a class="btn btn-default btn-link btn-md postShare" data-toggle="modal" data-target="#modal-share-post-{{$post->id}}">
        <i class="fa fa-share"></i> Share
      </a>
      <span class="pull-right text-muted">
        <a class="btn btn-default btn-link btn-md" data-toggle="modal" data-target="#modal-likes-{{$post->id}}">
          <span id="count-like-post-{{$post->id}}" >{{$post->like_count}}</span> likes - <span id="count-comment-post-{{$post->id}}">{{$post->comment_count}}</span> comments
        </a>
      </span>
    </div>

    <div class="box-footer box-comments" id="comment-place-post-{{$post->id}}" style="padding-bottom: 0;">
     @foreach($post->HavePostComments as $key=>$comment)
     @if((count($post->HavePostComments) - $key)<=2)
     <div class="box-comment comment-list-post-{{$post->id}}" >
      @else
      <div class="box-comment comment-list-post-{{$post->id}} comment-hidden animated fadeIn" style="display: none;">

        @endif

        @if($comment->fromUser->profile_photo=='')
        <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
        @else
        <img class="img-circle img-sm" src="{{asset($comment->fromUser->profile_photo)}}" alt="User Image">

        @endif


        <div class="comment-text">
          <span class="username">
            <a href="{{url('user/'.$comment->FromUser->id.'/show/timeline')}}">{{$comment->FromUser->name}}</a>
            <a href="#"><span class="text-muted pull-right">x</span></a>
          </span>
          
          @if($comment->image_url)
            <div class="row">
              <img src="{{url($comment->image_url)}}" class="img-responsive image-comment" style="width: 50% !important; height: auto !important; margin-top: 20px;">
            </div>
            
          @endif

          <p style="padding-right: 20px;" id="comment-content-preview-{{$comment->id}}">

            {{substr($comment->content, 0, 200)}}
            @if(strlen($comment->content)>200)
            <a id="content-post-{{$post->id}}" class="more" onclick="moreContentComment({{$comment->id}})"   style="color: #777; font-size: 14px; font-weight: bold;" > . . . More</a>
            @endif
          </p>

          <p style="padding-right:20px; display: none;" id="comment-content-full-{{$comment->id}}">{{$comment->content}}</p>


          <div class="actionFooterPost">
            <span id="likeComment2-1" class="likeComment">Like</span>
            · 
            <span id="replyComment2-1" class="replyComment">Reply</span>
            · 
            <span class="likedComment">
              <span class="fa fa-heart-o"></span>0</span>
              · 

              <span class="text-muted">{{TimeG::gTime(Carbon\Carbon::parse($comment->created_at)->diffForHumans())}}</span>
              <div class="replyCommentContainer">
                <div class="replyCommentCount">
                  <span class="fa fa-reply"></span> <span id="comment-replay-count-{{$comment->id}}">{{count($comment->HaveReplayCommentPosts)}}</span> replies
                </div>
                <div class="replyCommentList ">
                  @foreach($comment->HaveReplayCommentPosts as $replay)
                  <div class="box-comment">
                    @if($replay->FromUser->profile_photo=='')
                    <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-7.jpg')}}" alt="User Image">
                    @else
                    <img class="img-circle img-sm" src="{{asset($replay->FromUser->profile_photo)}}" alt="User Image">

                    @endif
                    <div class="comment-text">
                      <span class="username">
                        <a href="{{url('/user/'.$replay->FromUser->id.'/show/timeline')}}">{{$replay->FromUser->username}}</a>
                        <a href=""><span class="text-muted pull-right">x</span></a>
                      </span>



                      {{$replay->content}}
                      <div class="actionFooterPost">
                        <span class="text-muted">{{TimeG::gTime($replay->created_at)}}</span>
                      </div>
                    </div>
                  </div>

                  @endforeach
                  <div class="box-comment">
                    @if(Auth::user()->profile_photo!='')
                    <img class="img-circle img-sm" src="{{url(Auth::user()->profile_photo)}}" alt="User Image">
                    @else
                    <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-7.jpg')}}" alt="User Image">
                    @endif

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
        @endforeach


      </div>
      @if($post->comment_count > 2)
      <div class="viewAllComment"  class="" onclick="viewAllComment(this)" viewed="hidden"  post-id="{{$post->id}}" style="background: #f6f7f9; padding:10px 0 10px 0px;" >
        <a class="text-capitalize">View all comments</a>
      </div>

      @endif
      <div class="box-footer">
       @if(Auth::user()->profile_photo=='')
       <img class="img-responsive img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
       @else
       <img class="img-responsive img-circle img-sm" src="{{asset(Auth::user()->profile_photo)}}" alt="User Image">

       @endif
       <div class="img-push">
        <div class="textAreaReply">
          <div class="previewImageThumb">
           <output id="file-list-comment">

            <span>
              <img class="thumbPreviewImagePost" src="{{asset(Auth::user()->profile_photo)}}" alt="">
              <a class="deleteImageComment">x</a>
            </span>
          </output>
        </div>
        <textarea name="" id="input-content-comment-post-{{$post->id}}" class="form-control input-sm writeComment" placeholder="Write a comment.."></textarea>
        <div class="buttonPostReply" style="display: none;" id="spining-send-comment-post-{{$post->id}}">
         <button class="btn " style="" ><i class="fa fa-spinner fa-spin" ></i>
         </button>
       </div>
       <div class="buttonPostReply" id="btn-send-comment-post-{{$post->id}}">
        <button class="btn btnReplyImage"  target="#image-embed-{{$post->id}}"><span class="fa fa-camera"></span></button>
        <button class="btn" onclick="commentPostPublishEvent({{$post->id}})" ><span class="fa fa-paper-plane-o"></span>
        </button>
        <input type="file" name="fileReply" id="image-embed-{{$post->id}}" class="filesReply" accept="image/*">
      </div>
    </div>
  </div>
</div>
</div><!-- end post -->



<div class="modal fade" id="modal-share-post-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-share">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-share"> Share on your timeline</h4>
      </div>
      <div class="modal-body text-centers">

        <div class="box profile-info n-border-top">
          <form>
            <textarea class="form-control input-lg p-text-area" id="textareaPostShare" placeholder="Say something about this.."></textarea>
          </form>
          <div class="postQuote">
            <div class="imagePost" style="height: 300px;">
              @if(count($post->HavePostFilePictures)>1)
              <img class="img-responsive pad" src="{{url($post->HavePostFilePictures[0]['url'])}}" alt="Photo" style=" ">

              @else
              @foreach($post->HavePostFilePictures as $picture)
              <img class="img-responsive pad" src="{{url($picture->url)}}" alt="Photo" style=" ">
              @endforeach
              @endif
            </div>
            <div class="quotePostText">
              <blockquote>
                <span class="username"><a href="#">{{$post->FromUser->name}}</a></span><br>
                <span class="text-muted">{{Carbon\Carbon::parse($post->created_at)->diffForHumans()}} - <a href="#">
                  @if($post->kanal=='national')
                  National

                  @else
                  {{$post->FromCity->name}}
                  @endif

                </a></span>
                <p>{{$post->content}}</p>
              </blockquote>
            </div>
          </div>
          <div class="box-footer box-form" id="boxFormPost">
            <button type="button" class="btn btn-azure pull-right" id="buttonPostStatusShare">Post</button>
            <ul class="nav nav-pills">
              <li>
                <select name="channelPost" id="channelPost" class="form-control" name="kanal">
                  <option value="0">National</option>
                  <option value="2">Kota</option>
                </select>
              </li>
            </ul>
          </div>
        </div><!-- end post state form -->
      </div>
    </div>
  </div>
</div>


<div id="modal-likes-{{$post->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$post->like_count}}</span> likes</h4>
        
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table user-list">
            <tbody>
              @foreach($post->HavePostLikes as $like)
              <tr>
                <td>
                  @if($like->FromUser->profile_photo!='')
                  <img src="{{$like->FromUser->profile_photo}}" alt="" class="img-circle img-no-padding img-responsive" style="width: 40px; height: 40px;">
                  @else
                  <img src="{{url('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsive" style="width: 40px; height: 40px;">
                  @endif
                  <a href="#" class="user-link">{{$like->FromUser->username}}</a>
                  <!-- <span class="user-subhead">Ketua Umum</span> -->
                </td>
                <td>
                  <a href="messages.html" class="btn btn-azure pull-right">Message
                  </a></td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>

    </div>
  </div>





