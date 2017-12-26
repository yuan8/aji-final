<div class="row">
  <div class="col-md-12">
    <div class="cover profile">
      <div class="wrapper">
        <div class="image">
       
          <img src="{{asset('aji/component/img/Cover/profile-cover.jpg')}}" class="show-in-modal" alt="people">

        </div>

        @if($user->id==Auth::user()->id)

          <div class="buttonEditCover">
                  <a href="#" class="btn">
                    <i class="fa fa-camera"></i> Change Cover
                  </a>
                </div>

        @endif

      </div>
      <div class="cover-info">
        <form id="posting-upload-avatar" style="display: none;" enctype="multipart/form-data" action="{{url('user/upload/avatar')}}" method="post">
         {{ csrf_field() }}

          <input type="file" id="avatar-change" name="avatar" accept="image/*">
        </form>
        <div class="avatar">
        @if($user->profile_photo!='')
        <img src="{{asset($user->profile_photo)}}" class="img-responsive" style="">

        @else
      <img src="{{asset('storage/user/16/photos/c74d958d-609-66940.jpg')}}" class="img-responsive" style="">
      @endif
          @if($user->id==Auth::user()->id)
            <div class="buttonEditPhoto" >
                <a href="#" class="btn" id="button-change-avatar-profile" >
                    <i class="fa fa-camera"></i>
                </a>
            </div>

            <script type="text/javascript">
              $('#button-change-avatar-profile').click(function(){
                $('#avatar-change').click();
              });

            </script>


        

          <!-- Modal -->
         
          @endif


        </div>
        <div class="name">
          <a href="#"><h1>{{$user->name}}
           <!--< span class="username-small">({{$user->username}})</span> -->
         </h1></a>
          <div class="text-white">Sekertaris Ariel Noah</div>
        </div>
        <ul class="cover-nav">
          <li 
          @if($menu=='timeline')
          class="active"
          @endif
          > 
             <a href="{{url('user/'.$user->id.'/show/timeline')}}"><i class="fa fa-fw fa-bars"></i> Timeline</a></li>
          <li
          @if($menu=='photos')
          class="active"
          @endif

          ><a href="{{url('user/'.$user->id.'/show/photos')}}"><i class="fa fa-fw fa-image"></i> Photos</a></li>
        </ul>

        @if($user->id == Auth::user()->id)
        <ul class="cover-nav coverButtonRight pull-right">

          <li>
            <a href="{{url('user/'.Auth::user()->id.'/about-edit')}}" class="btn btn-azure pull-right">Edit Profile</a>
          </li>
          <li>
            <a href="#" class="btn btn-azure pull-right">Activity Log</a>
          </li>
        </ul>
        @else
        
        <ul class="cover-nav coverButtonRight pull-right">
          <li>
            <a href="messages.html" class="btn btn-azure pull-right">Send Message</a>
          </li>
        </ul>
        @endif

      </div>
    </div>
  </div>
</div>

@include('component.modal-upload-avatar')
