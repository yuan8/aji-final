@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="col-md-10 col-md-offset-1">
        <h3 style="margin-top:0; text-align:center;">Settings</h3>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="profileActivity ">
              <h4 style="margin-top:0;"><i class="fa fa-key"></i> Change Password</h4>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="passOld">Old Password</label>
                      <input type="password" class="form-control" id="passOld">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="passNew">New Password</label>
                      <input type="password" class="form-control" id="passNew">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="passConfirm">Confirm New Password</label>
                      <input type="password" class="form-control" id="passConfirm">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <a href="#" class="btn btn-azure btn-block">Save</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="profileActivity ">
              <h4 style="margin-top:0;"><i class="fa fa-lock"></i> Privacy</h4>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Birthday</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" onclick="settingAboutEvent(this)" id="birth_day" type="checkbox"  {{ ($settingAbout->birth_day) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Blood</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider  toggle yesno colored-purple" onclick="settingAboutEvent(this)" id="blood"  type="checkbox" {{ ($settingAbout->blood) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Member Number</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple"  onclick="settingAboutEvent(this)" id="member_number" type="checkbox" {{ ($settingAbout->member_number) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Address</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" onclick="settingAboutEvent(this)" id="address" type="checkbox" {{ ($settingAbout->address) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Phone</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" onclick="settingAboutEvent(this)" id="phone" type="checkbox" {{ ($settingAbout->phone) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>My Email</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                         <input class="checkbox-slider toggle yesno colored-purple" onclick="settingAboutEvent(this)" id="email" type="checkbox" {{ ($settingAbout->email) ? "checked" : "" }}>
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

            <div class="profileActivity ">
              <h4 style="margin-top:0;"><i class="fa fa-star"></i> Riwayat</h4>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>Riwayat Pekerjaan</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>Riwayat Organisasi</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>Riwayat Pendidikan</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Show <a><strong>Riwayat Pelatihan</strong></a> in public
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="profileActivity ">
              <h4 style="margin-top:0;"><i class="fa fa-bell-o"></i> Push Notifications</h4>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Someone <a><strong>commented</strong></a> on your post
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Someone <a><strong>liked</strong></a> on your post
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    You're <a><strong>tagged</strong></a> in a post
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Received a <a><strong>Personal Message</strong></a>
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    Received a <a><strong>Group Message</strong></a>
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    You're <a><strong>invited</strong></a> a new group
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    <a><strong>Event</strong></a> verify
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media activity-item">
                <div class="row">
                  <div class="col-md-8">
                    <a><strong>Event</strong></a> reminder
                  </div>
                  <div class="col-md-4">
                    <div class="pull-right">
                      <label>
                          <input class="checkbox-slider toggle yesno colored-purple" type="checkbox">
                          <span class="text"></span>
                      </label>
                    </div>
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