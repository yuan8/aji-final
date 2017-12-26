  <div class="stickparent" data-sticky-column>
        <div class="profile-nav">
          <div class="widget">
            <div class="widget-body">
              <div class="coverprofile">
                <img src="{{asset('aji/component/img/Photos/2.jpg')}}" alt="" >
              </div>

              <div class="user-heading round">
                <a href="#">
                  @if(Auth::user()->profile_photo=='')
                  <img src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="">
                  @else
                  <img src="{{asset(Auth::user()->profile_photo)}}" alt="">

                  @endif
                </a>
                <h1>{{Auth::user()->name}}
                 <!-- <span class="username-small">({{Auth::user()->username}})</span> -->
               </h1>
               <p>Ketua Bidang Datar Melengkung</p>
             </div>

             <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="{{url('user/'.Auth::user()->id.'/show/timeline')}}"><i class="fa fa-user"></i> My Profile</a>
              </li>
              <li>
                <a href="{{url('user/'.Auth::user()->id.'/show/photos')}}"><i class="fa fa-image"></i> Photos</a></li>
                <li>
                  <a href="{{url('user/'.Auth::user()->id.'/show/activity')}}"><i class="fa fa-bar-chart-o"></i> Activity Log</a>
                </li>
                <li>
                  <a href="{{url('user/'.Auth::user()->id.'/show/fee')}}"><i class="fa fa-money"></i> Iuran Anggota</a>
                </li>
                <li>
                  <a href="{{url('user/'.Auth::user()->id.'/show/event-history')}}"><i class="fa fa-calendar-check-o"></i> Event History</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>