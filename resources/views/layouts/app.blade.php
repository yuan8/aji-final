<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
        
    var URL_THIS="{{url('')}}";

    </script>
    @include('component.header-app')
    @include('component.component-connect')
    @yield('css')
</head>
<body class="animated fadeIn">

	@include('component.nav')
    @yield('content')
    @include('component.footer')
</body >
	<script src="{{asset('aji/component/bootstrap.3.3.6/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('aji/component/assets/js/jquery.sticky-kit.js')}}"></script>
    <script src="{{asset('aji/component/assets/js/script.js')}}"></script>
    <script src="{{asset('aji/component/assets/chosen/chosen.jquery.min.js')}}"></script>
    <script src="{{asset('aji/component/assets/jquery.bxslider/jquery.bxslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('aji/connect.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('aji/component/toogle/css/bootstrap-toggle.css')}}">
    
    <script type="text/javascript" src="{{asset('aji/component/toogle/js/bootstrap-toggle.js')}}"></script>

    @yield('js')


    <form  action="{{url('logout')}}" method="post" id="log-out-service">
    	{{csrf_field()}}

    </form>

    <script type="text/javascript">
    	
    	function LogOutService(){
    		$('#log-out-service').submit();
    	}

    </script>

</html>
