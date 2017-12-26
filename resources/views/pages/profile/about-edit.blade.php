@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="row page-content profile-edit">
      <div class="col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-nav">
              <div class="widget">
                <div class="widget-body">
                  
                  <div class="user-heading round">
                    <h1>John Breakgrow</h1>
                    <p><a href="#">View my profile</a></p>
                  </div>

                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="{{url('user/'.Auth::user()->id.'/about-edit')}}">About</a></li>
                    <li><a href="#">Pekerjaan</a></li>
                    <li><a href="#">Organisasi</a></li>
                    <li><a href="#">Pendidikan</a></li>
                    <li><a href="#">Pelatihan</a></li>
                    <li><a href="#">Emergency Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
          	<form action="{{url('user/update/about')}}" method="post">
          		{{csrf_field()}}
            <div class="profileActivity">
              <h4 style="margin-top:0;"><i class="fa fa-user"></i> Identity</h4>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="firstname">Full name</label>
                      <input type="text" class="form-control" id="firstname" placeholder="First name" name="name" value="{{Auth::user()->name}}">
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastname">Last name</label>
                      <input type="text" class="form-control" id="lastname" placeholder="Last name">
                    </div>
                  </div> -->
                </div>
              </div>
              
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="birthplace">Date of Birth</label>
                      <input type="text" class="form-control" id="birthplace" placeholder="Birth place" value="{{Auth::user()->place_birth}}" name="place_birth">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="birthdate">Date</label>
                      <input type="text" class="form-control date" id="birthdate" placeholder="Date" value="{{Auth::user()->date_birth}}" name="date_birth">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="blood">Blood</label>
                      <input type="text" class="form-control" id="blood" placeholder="Blood" name="blood_type" value="{{Auth::user()->blood_type }}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                  </div>
                  <div class="col-md-5">
                   <!--  <div class="form-group">
                      <label for="city">City</label>
                      <select name="city" id="city" class="form-control">
                        <option value="0">-- Select city --</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Medan">Medan</option>
                      </select>
                    </div> -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="{{Auth::user()->phone}}">
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{Auth::user()->email}}">
                    </div>
                  </div>
                </div>
              </div>

              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="membership">Membership No.</label>
                      <input type="text" class="form-control" id="membership" placeholder="Membership" value="{{Auth::user()->id}}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
                    </div>
                  </div>
                </div>
              </div>

              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="membership">Bio</label>
                      <textarea name="short_bio" class="form-control"  id="membership">{{Auth::user()->short_bio}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <input type="submit" class="btn btn-azure btn-block" value="submit">
                </div>
              </div>
            </div>
            </form>
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

@stop