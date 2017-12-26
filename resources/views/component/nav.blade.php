 <nav class="navbar navbar-white navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('home')}}">
        <img src="{{asset('aji/component/img/logo-aji.png')}}" alt="">
      </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li class="actives"><a href="{{url('home')}}">Home</a></li>
        <li><a href="{{url('events')}}">Events</a></li>
        <li><a href="{{url('board')}}">Board</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown headNotifications">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell-o" aria-hidden="true"></i> 
            Notifications <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="titleNav">Notifications</li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-1.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> added 2 photos of you.
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> added 2 photos of you.
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> added 2 photos of you.
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> added 2 photos of you.
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="{{url('user/'.Auth::user()->id.'/notification')}}">See all notifications</a>
            </li>
          </ul>
        </li>
        <li class="dropdown headNotifications">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-envelope-o" aria-hidden="true"></i> Message 
            <span class="label label-danger r-activity">2</span>
          </a>
          <ul class="dropdown-menu">
            <li class="titleNav">Messages</li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-1.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> Laksanakan
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> Ok, sip
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> Lorem ipsum dolor sit.
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="#">
                <div class="notifImage">
                  <img class="img-circle img-sm" src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="User Image">
                </div>
                <span>Michael Essien</span> haloo broo..
                <small>September 19 at 5:05pm</small>
              </a>
            </li>
            <li>
              <a href="{{url('user/'.Auth::user()->id.'/message')}}">See all messages</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#" id="openSearch">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <div class="inputSearch">
            <form action="{{url('search')}}" method="get" id="searchHeader">
              <div class="input-group input-group-md">
                <input type="text" class="form-control" placeholder="search" name="q">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </li>
        <li class="dropdown last">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             @if(Auth::user()->profile_photo!='')
            <img class="img-circle " style="width:40px;"  src="{{asset(Auth::user()->profile_photo)}}" alt="User Image">

            @else
            <img class="img-circle " style="width:40px;" src="{{asset('aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
            @endif
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{url('user/'.Auth::user()->id.'/show/timeline')}}">My Profile</a></li>
            <li><a href="{{url('user/'.Auth::user()->id.'/show/activity')}}">Activity Log</a></li>
            <li><a href="{{url('user/'.Auth::user()->id.'/show/fee')}}">Iuran Anggota</a></li>
            <li><a href="{{url('user/'.Auth::user()->id.'/show/event-history')}}">Event History</a></li>
            <li><a href="{{url('user/'.Auth::user()->id.'/setting')}}">Setting</a></li>
            <li><a href="#" onclick="LogOutService();">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>