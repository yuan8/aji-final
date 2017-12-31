@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="col-md-8 col-md-offset-2">
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