@extends('layouts.auth')

@section('content')
    <div class="wrapper">
      <div class="parallax"> 
          <div class="small-info">
            <div class="row" style="margin-bottom:20px;">
              <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
                <div class="input-group input-group-md">
                  <input type="text" class="form-control" placeholder="search people">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Search</button>
                  </span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
                <div class="card-group animated flipInX">
                  <div class="card">
                    <div class="card-block center">
                      <div class="center">
                        <br>
                        <div class="logologin">
                          <img src="{{asset('aji/component/img/logo-aji.png')}}" alt=""> 
                        </div>
                      </div>
                      <p class="">
                        <span class="icon-text">Get the app.</span>
                      </p>
                      <p class="getapp">
                        <a href="#">
                          <img src="{{asset('aji/component/img/button-ios.png')}}" alt="">
                        </a>
                        <a href="#">
                          <img src="{{asset('aji/component/img/button-playstore.png')}}" alt="">
                        </a>
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-block  center">
                      <h4 class="">
                        <span class="icon-text">Please Login</span>
                      </h4>
                      <br>
                      <form action="{{url('login')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Password">
                          <br>
                          <div class="center">
                            <button type="submit"  class="btn btn-azure btn-block">
                              Login
                            </button>
                          </div>
                          <br>
                          <a href="#" class="pull-left show-in-modal" data-toggle="modal" data-target="#openForgotPassword">
                            <span>Forgot password?</span>
                          </a>
                          <a href="{{url('register')}}" class="pull-right">
                            <span>Register</span>
                          </a>
                          <div class="clearfix"></div>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-md-12" style="text-align: center;">
                  <span>Copyright &copy; 2017 AJI Indonesia - All rights reserved</span>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="openForgotPassword" tabindex="-1" role="dialog" aria-labelledby="openForgotPassword">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="openForgotPassword">Forgot Password</h4>
                </div>
                <div class="modal-body text-centers">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alertForgot"></div>
                            <div class="form-group">
                              <label for="forgotEmail">Insert your Email</label>
                              <input type="email" class="form-control" id="forgotEmail" placeholder="">
                            </div>
                            <button type="button" class="btn btn-azure" id="btnForgot">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@stop


@section('js')
    <script src="{{('aji/component/bootstrap.3.3.6/js/bootstrap.min.js')}}"></script>
    
    <script src="{{('aji/component/assets/js/jquery.sticky-kit.js')}}"></script>
    <script src="{{('aji/component/assets/js/script.js')}}"></script>
    <script src="{{('aji/component/assets/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{('aji/component/assets/jquery.bxslider/jquery.bxslider.js')}}"></script>
    <script type="text/javascript">
      var successAlert = '<div class="form-group has-success has-feedback"><input type="text" class="form-control" value="Success! Please check your Email."><span class="fa fa-check form-control-feedback"></span></div>';
      var failedAlert = '<div class="form-group has-warning has-feedback"><input type="text" class="form-control" value="Email not found!"><span class="fa fa-warning form-control-feedback"></span></div>';
      $('#btnForgot').on('click', function() {
        $('.alertForgot').html(successAlert);
      });
    </script>



@stop


@include('pages.login.login-js')


