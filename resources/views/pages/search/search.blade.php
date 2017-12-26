@extends('layouts.app')

@section('css')

<link href="{{asset('aji/component/assets/css/profile4.css')}}" rel="stylesheet">

@stop

@section('content')
<!-- Begin page content -->

<div class="row page-content">
	<div class="col-md-8 col-md-offset-2" style="min-height: 100vh;">
		<div class="row">
			@foreach($results as $key=>$res)

			@if($res['type']=='user')
			<div class="col-md-12">
				<div class="cover profile">
					<div class="wrapper">
						<div class="image">
							
							<img src="{{asset('/aji/component/img/Cover/profile-cover.jpg')}}" class="show-in-modal" alt="people">
						</div>
						@if(Auth::user()->id == ($res['data']['id']))
						<div class="buttonEditCover">
							<a href="#" class="btn">
								<i class="fa fa-camera"></i> Change Cover
							</a>
						</div>
						@endif
					</div>
					<div class="cover-info">
						<div class="avatar">
							<img src="{{asset('/aji/component/img/Friends/woman-3.jpg')}}" alt="people">
						</div>
						<div class="name">
							<a href="#"><h1>{{$res['data']['name']}}
								<!--< span class="username-small">(yuanp)</span> -->
							</h1></a>
							<div class="text-white">Sekertaris Ariel Noah</div>
						</div>


						<ul class="cover-nav coverButtonRight pull-right">

							<li>
								<a href="{{url('user/'.$res["data"]["id"].'/show/timeline')}}" class="btn btn-azure pull-right">Detail</a>
							</li>
							
						</ul>

					</div>
				</div>
			</div>

			@elseif($res['type']=='post')



			<div class="col-md-12">
				<div class="box box-widget box-timeline" id="postStatus2" post-id="2" post-url="">
					<div class="box-header with-border">
						<div class="user-block">
							<img class="img-circle" src="{{asset('/aji/component/img/Friends/guy-3.jpg')}}" alt="User Image">
							<span class="username"><a href="{{url('user/'.$res['data']['FromUser']['id'].'/show/timeline')}}">{{$res['data']['FromUser']['name']}}</a>
							</span>
							<span class="description">7:30 PM Today - <a href="#">National</a></span>
							<div class="box-tools" style="position: absolute; right: 15px; top:10px;">
								<a href="#" class="btn btn-azure pull-right">DETAIL</a>
							</div>
								
								
							
						</div>


					</div>
					<div class="box-body">
						<p>
							{{$res['data']['content']}}
						</p>
					</div>
				</div>
			</a>
		</div>
		@endif

		@endforeach

		@if($results==null)
		<h5 class="text-center text-capitalize">Nodata From query {{$q}}</h5>
		@endif
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