@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
	<div class="col-md-10 col-md-offset-1">
		<h3 style="margin-top:0; text-align:center;">Iuran Anggota</h3>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="profileActivity ">
					<div class="media activity-item">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="fullname">Full name</label>
									<input type="text" class="form-control" id="fullname" value="John Breakgrow">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="textContent">Write something</label>
									<textarea name="textContent" id="textContent" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="passConfirm">Attachment</label>
									<input type="file" multiple="" class="form-control">
								</div>
							</div>
							<div class="col-md-12">
								<a href="#" class="btn btn-azure btn-block">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">
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