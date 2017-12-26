@extends('layouts.app')

@section('css')

<link href="{{asset('aji/component/assets/css/profile4.css')}}" rel="stylesheet">

@stop

@section('content')
<!-- Begin page content -->
<div class="row page-content">
  <div class="col-md-8 col-md-offset-2">

    @include('component.header-my-profile')

    <div class="row" data-sticky-parent>

      <div class="col-md-5">
        <div class="stickparent" data-sticky-column>
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-user"></i> About</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <ul class="profile-about margin-none">
                <li class="text-capitalize">
                  {{ isset($user->short_bio) ? $user->short_bio : "" }}
                </li>
                @if($user->HaveSettingAbout->birth_day)
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Date of Birth</span></div>
                    <div class="col-sm-8">{{Carbon\Carbon::parse($user->date_birth)->formatLocalized('%d %B %Y')}}</div>
                  </div>
                </li>
                @endif
                @if($user->HaveSettingAbout->blood)
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Blood</span></div>
                    <div class="col-sm-8">{{isset($user->blood_type) ? $user->blood_type : "-" }}</div>
                  </div>
                </li>
                @endif
                @if($user->HaveSettingAbout->member_number)

                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Member No.</span></div>
                    <div class="col-sm-8">{{$user->member_number}}</div>
                  </div>
                </li>
                @endif
                @if($user->HaveSettingAbout->address)

                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Address</span></div>
                    <div class="col-sm-8">Asem Baris Jl. H</div>
                  </div>
                </li>
                @endif
             
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">City</span></div>
                    <div class="col-sm-8">{{$user->FromCity->name}}</div>
                  </div>
                </li>
                @if($user->HaveSettingAbout->phone)

                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Phone</span></div>
                    <div class="col-sm-8">{{$user->phone}}</div>
                  </div>
                </li>
                @endif
                @if($user->HaveSettingAbout->email)

                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Email</span></div>
                    <div class="col-sm-8">{{$user->email}}</div>
                  </div>
                </li>
                @endif
              </ul>
            </div>
          </div>

         <!--  <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-envelope"></i> Emergency Contact</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <ul class="profile-about margin-none">
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Name</span></div>
                    <div class="col-sm-8">Michael Essien</div>
                  </div>
                </li>
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Hubungan</span></div>
                    <div class="col-sm-8">Suami</div>
                  </div>
                </li>
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Address</span></div>
                    <div class="col-sm-8">Asem Baris Jl. H</div>
                  </div>
                </li>
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Phone</span></div>
                    <div class="col-sm-8">081234567890</div>
                  </div>
                </li>
                <li class="">
                  <div class="row">
                    <div class="col-sm-4"><span class="text-muted">Email</span></div>
                    <div class="col-sm-8">asdqwe@domain.com</div>
                  </div>
                </li>
              </ul>
            </div>
          </div> -->

          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-briefcase"></i> Pekerjaan</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <div class="media activity-item">

                <div class="row listRiwayat">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div>
                        January 2017 - Present <span class="text-muted">(10 months)</span>
                      </div>
                      <div><strong>Chief Technology Officer</strong></div>
                      <div>PT Alam Sejuk</div>
                      <div>Jakarta Raya, Indonesia</div>
                    </div>
                  </div>
                </div>

                <div class="row listRiwayat">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div class="">
                        December 2010 - January 2017 <span class="text-muted">(7 years 1 month)</span>
                      </div>
                      <div><strong>Front End Developer</strong></div>
                      <div>PT Maskod Komunika Indonesia</div>
                      <div>Jakarta Raya, Indonesia</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-group"></i> Organisasi</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <div class="media activity-item">

                <div class="row listRiwayat">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div>January 2017 - Present <span class="text-muted">(10 months)</span></div>
                      <div><strong>Ketua Umum</strong></div>
                      <div>Front Pembela Islam</div>
                      <div>Jakarta Raya, Indonesia</div>
                    </div>
                  </div>
                </div>

                <div class="row listRiwayat">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div>December 2010 - January 2017 <span class="text-muted">(7 years 1 month)</span></div>
                      <div><strong>Sekjen</strong></div>
                      <div>PT Maskod Komunika Indonesia</div>
                      <div>Jakarta Raya, Indonesia</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-graduation-cap"></i> Pendidikan</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <div class="row listRiwayat">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="">September 2012</div>
                    <div><strong>Universitas Komputer Indonesia Bandung</strong></div>
                    <div>S1 in Art/Design/Creative Multimedia</div>
                    <div>Indonesia</div>
                  </div>
                </div>
              </div>

              <div class="row listRiwayat">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="">December 2014</div>
                    <div><strong>Universitas Komputer Indonesia Bandung</strong></div>
                    <div>Magister in Art/Design/Creative Multimedia</div>
                    <div>Indonesia</div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption"><i class="fa fa-rocket"></i> Pelatihan</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">

              <div class="media activity-item">
                <div class="row listRiwayat">
                  <div class="form-group">
                    <div class="col-md-12">
                      <div>September 2012</div>
                      <div><strong>Progammer Expert</strong></div>
                      <div>Indonesia</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!--============= timeline posts-->
      <div class="col-md-7">
        <div class="stickparent" data-sticky-column>
          <div class="row">
            <!-- left posts-->
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <!-- post state form -->

                  @if($user->id == Auth::user()->id)
                  <div class="box profile-info n-border-top">
                     <form action="{{url('post')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <textarea name="content" class="input-lg p-text-area" id="textareaPost" placeholder="Whats on your mind?"></textarea>
                    
                  <div class="previewImageThumb">
                    <output id="listUploadImagesPost">
                      <!-- <a href="#" id="addMoreImages"><i class="fa fa-plus"></i></a> -->
                    </output>
                  </div>
                  <div class="box-footer box-form" id="boxFormPost">
                    <button type="submit" class="btn btn-azure pull-right" id="buttonPostStatus" disabled="disabled">Post</button>
                    <ul class="nav nav-pills">
                      <li>
                        <a href="#" id="cameraPost"><i class="fa fa-camera"></i></a>
                        <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg"  name="files[]" multiple />
                      </li>
                      <li>
                        <select  id="channelPost" class="form-control" name="kanal">
                          <option value="0">National</option>
                          
                          <option value="{{Auth::user()->FromCity->id}}">Kota {{Auth::user()->FromCity->name}} 
                          </option>

                        
                        </select>
                      </li>
                    </ul>
                  </div>
                  </form>

                  </div><!-- end post state form -->
                  @endif


                  <!--   posts -->

                  @foreach($posts as $post)
               
                    @include('component.post')

                    @include('component.post-likes-modal')

                  @endforeach





                  </div>
                </div>
              </div><!-- end left posts-->
            </div>
          </div>
        </div>
        <!-- end timeline posts-->

      </div>
    </div>
  </div>



  <div class="modal fade" id="modal-share" tabindex="-1" role="dialog" aria-labelledby="modal-share">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modal-share">Share on your timeline</h4>
        </div>
        <div class="modal-body text-centers">

          <div class="box profile-info n-border-top">
            <form>
              <textarea class="form-control input-lg p-text-area" id="textareaPostShare" placeholder="Say something about this.."></textarea>
            </form>
            <div class="postQuote">
              <div class="imagePost">
                <img class="img-responsive" src="{{asset('aji/component/img/Photos/3.jpg')}}" alt="Photo">
              </div>
              <div class="quotePostText">
                <blockquote>
                  <span class="username"><a href="#">John Breakgrow jr.</a></span><br>
                  <span class="text-muted">7:30 PM Today - <a href="#">National</a></span>
                  <p>I took this photo this morning. What do you guys think?</p>
                </blockquote>
              </div>
            </div>
            <div class="box-footer box-form" id="boxFormPost">
              <button type="button" class="btn btn-azure pull-right" id="buttonPostStatusShare">Post</button>
              <ul class="nav nav-pills">
                <li>
                  <select name="channelPost" id="channelPost" class="form-control">
                    <option value="1">National</option>
                    <option value="2">Kota</option>
                  </select>
                </li>
              </ul>
            </div>
          </div><!-- end post state form -->
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