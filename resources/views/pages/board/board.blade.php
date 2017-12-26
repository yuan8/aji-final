@extends('layouts.app')

@section('css')


@stop

@section('content')
<!-- Begin page content -->
<div class="container page-content">
 <div class="row">
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-md">
              <input type="text" class="form-control" placeholder="search people">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Search</button>
              </span>
            </div>
            <br>
            <div class="widget">
              <div class="table-responsive">
                <table class="table user-list">
                  <thead>
                    <tr>
                      <th><span>User</span></th>
                      <th><span>City</span></th>
                      <th class="text-center"><span>Job</span></th>
                      <th><span>Email</span></th>
                      <th>&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td>
                        <img src="http://aji.or.id/upload/pengurus/suwarjono.jpg" alt="" class="img-circle img-no-padding img-responsive">
                        <a href="#" class="user-link">Suwarjono</a>
                        <span class="user-subhead"> 
                        KETUA UMUM</span>
                      </td>
                      <td>Jakarta Selatan</td>
                      <td class="text-center">suara.com</td>
                      <td><a>suwarjono@domain.com</a></td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-azure pull-right">
                          <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <img src="http://aji.or.id/upload/pengurus/Arfi.jpg" alt="" class="img-circle img-no-padding img-responsive">
                        <a href="#" class="user-link">Arfi Bambani Amri</a>
                        <span class="user-subhead">SEKRETARIS JENDERAL
                        </span>
                      </td>
                      <td>Jakarta Selatan</td>
                      <td class="text-center">viva.co.id</td>
                      <td><a>arfi@domain.com</a></td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-azure pull-right">
                          <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                        </a>
                      </td>
                    </tr>

                    <tr style="background: #f5f6f8 !important;">
                      <td style="background: transparent;"><b class="text-uppercase">Bidang Advokasi</b></td>
                      <td style="background: transparent;"></td>
                      <td style="background: transparent;"></td>
                      <td style="background: transparent;"></td>
                      <td style="background: transparent;"></td>
                    </tr>


                    <tr>
                      <td>
                        <img src="http://aji.or.id/upload/pengurus/Iman-Dwi-Nugroho.jpg" alt="" class="img-circle img-no-padding img-responsive">
                        <a href="#" class="user-link">Iman D Nugroho</a>
                        <span class="user-subhead text-uppercase">Ketua Bidang Advokasi
                        </span>
                      </td>
                      <td>Jakarta Selatan</td>
                      <td class="text-center">CNN INDONESIA</td>
                      <td><a>nugroho@domain.com</a></td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-azure pull-right">
                          <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                        </a>
                      </td>
                    </tr>
                    

                    <tr>
                      <td>
                        <img src="http://aji.or.id/upload/pengurus/Aryo-Wisanggeni-Foto3.jpg" alt="" class="img-circle img-no-padding img-responsive">
                        <a href="#" class="user-link">Aryo Wisanggeni</a>
                        <span class="user-subhead text-uppercase">
                        </span>
                      </td>
                      <td>Jakarta Selatan</td>
                      <td class="text-center"></td>
                      <td><a>aryo@domain.com</a></td>
                      <td style="width: 20%;">
                        <a href="#" class="btn btn-azure pull-right">
                          <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                        </a>
                      </td>
                    </tr>


                    <tr>

                     <td>
                      <img src="http://aji.or.id/upload/pengurus/Bina%20Karos.jpg" alt="" class="img-circle img-no-padding img-responsive">
                      <a href="#" class="user-link">  Bina Karos</a>
                      <span class="user-subhead text-uppercase">
                      </span>
                    </td>
                    <td>Jakarta Selatan</td>
                    <td class="text-center"></td>
                    <td><a>bina@domain.com</a></td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-azure pull-right">
                        <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                      </a>
                    </td>
                  </tr>

                  <tr style="background: #f5f6f8 !important;">
                    <td style="background: transparent;"><b class="text-uppercase">Bidang Pendidikan</b></td>
                    <td style="background: transparent;"></td>
                    <td style="background: transparent;"></td>
                    <td style="background: transparent;"></td>
                    <td style="background: transparent;"></td>
                  </tr>

                  <td>
                    <img src="http://aji.or.id/upload/pengurus/abdul_manan.jpg" alt="" class="img-circle img-no-padding img-responsive">
                    <a href="#" class="user-link"> Abdul Manan</a>
                    <span class="user-subhead text-uppercase">Ketua Bidang Pendidikan

                    </span>
                  </td>
                  <td>Jakarta Selatan</td>
                  <td class="text-center">Tempo</td>
                  <td><a>abdul@domain.com</a></td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-azure pull-right">
                      <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                    </a>
                  </td>
                </tr>


                <td>
                  <img src="http://aji.or.id/upload/pengurus/Komang.jpg" alt="" class="img-circle img-no-padding img-responsive">
                  <a href="#" class="user-link"> Wahyu Dhyatmika</a>
                  <span class="user-subhead text-uppercase">

                  </span>
                </td>
                <td>Jakarta Selatan</td>
                <td class="text-center">Tempo</td>
                <td><a>wahyu@domain.com</a></td>
                <td style="width: 20%;">
                  <a href="#" class="btn btn-azure pull-right">
                    <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                  </a>
                </td>
              </tr>

              <td>
                <img src="http://aji.or.id/upload/pengurus/rinjani_ps.jpg" alt="" class="img-circle img-no-padding img-responsive">
                <a href="#" class="user-link">Renjani PS
                </a>
                <span class="user-subhead text-uppercase">

                </span>
              </td>
              <td>Jakarta Selatan</td>
              <td class="text-center">Mongabay</td>
              <td><a>renjani@domain.com</a></td>
              <td style="width: 20%;">
                <a href="#" class="btn btn-azure pull-right">
                  <span class=""><i class="fa fa-envelope-o"></i> Message</span>
                </a>
              </td>
            </tr>
            <tr>
             <td>
              <img src="http://aji.or.id/upload/pengurus/ratna_bisnisindo.jpg" alt="" class="img-circle img-no-padding img-responsive">
              <a href="#" class="user-link">  Ratna Ariyanti

              </a>
              <span class="user-subhead text-uppercase">

              </span>
            </td>
            <td>Jakarta Selatan</td>
            <td class="text-center">Bisnis Indonesia</td>
            <td><a>ratna@domain.com</a></td>
            <td style="width: 20%;">
              <a href="#" class="btn btn-azure pull-right">
                <span class=""><i class="fa fa-envelope-o"></i> Message</span>
              </a>
            </td>
          </tr>
          <tr style="background: #f5f6f8 !important;">
            <td style="background: transparent;"><b class="text-uppercase">Bidang Perempuan dan Anak</b></td>
            <td style="background: transparent;"></td>
            <td style="background: transparent;"></td>
            <td style="background: transparent;"></td>
            <td style="background: transparent;"></td>
          </tr>

          <tr>
           <td>
            <img src="https://www.aji.or.id/upload/pengurus/foto kecil.jpg" alt="" class="img-circle img-no-padding img-responsive">
            <a href="#" class="user-link">  Y. Hesthi Murthi

            </a>
            <span class="user-subhead text-uppercase">Ketuan Bidang Perempuan dan Anak

            </span>
          </td>
          <td>Jakarta Selatan</td>
          <td class="text-center">Bisnis Indonesia</td>
          <td><a>hesthi@domain.com</a></td>
          <td style="width: 20%;">
            <a href="#" class="btn btn-azure pull-right">
              <span class=""><i class="fa fa-envelope-o"></i> Message</span>
            </a>
          </td>
        </tr>


        <tr>
         <td>
          <img src="http://aji.or.id/upload/pengurus/Endah.jpg" alt="" class="img-circle img-no-padding img-responsive">
          <a href="#" class="user-link">  Endah Lismartini

          </a>
          <span class="user-subhead text-uppercase">

          </span>
        </td>
        <td>Jakarta Selatan</td>
        <td class="text-center">viva.co.id</td>
        <td><a>endah@domain.com</a></td>
        <td style="width: 20%;">
          <a href="#" class="btn btn-azure pull-right">
            <span class=""><i class="fa fa-envelope-o"></i> Message</span>
          </a>
        </td>
      </tr>

      <tr style="background: #f5f6f8 !important;">
        <td style="background: transparent;"><b class="text-uppercase">Bidang Dana Usaha dan Hubungan Antar Lembaga</b></td>
        <td style="background: transparent;"></td>
        <td style="background: transparent;"></td>
        <td style="background: transparent;"></td>
        <td style="background: transparent;"></td>
      </tr>

      <tr>
       <td>
        <img src="http://aji.or.id/upload/pengurus/Eko-Maryadi.jpg" alt="" class="img-circle img-no-padding img-responsive">
        <a href="#" class="user-link">  Eko Maryadi

        </a>
        <span class="user-subhead text-uppercase">KETUA Bidang Dana Usaha dan Hubungan Antar Lembaga

        </span>
      </td>
      <td>Jakarta Selatan</td>
      <td class="text-center">Freelance</td>
      <td><a>eko@domain.com</a></td>
      <td style="width: 20%;">
        <a href="#" class="btn btn-azure pull-right">
          <span class=""><i class="fa fa-envelope-o"></i> Message</span>
        </a>
      </td>
    </tr>


    <tr>
     <td>
      <img src="http://aji.or.id/upload/pengurus/Alwan-Ridha.jpg" alt="" class="img-circle img-no-padding img-responsive">
      <a href="#" class="user-link">  Alwan Ramdani

      </a>
      <span class="user-subhead text-uppercase">Freelance
      </span>
    </td>
    <td>Jakarta Selatan</td>
    <td class="text-center"></td>
    <td><a>alwan@domain.com</a></td>
    <td style="width: 20%;">
      <a href="#" class="btn btn-azure pull-right">
        <span class=""><i class="fa fa-envelope-o"></i> Message</span>
      </a>
    </td>
  </tr>

</tbody>
</table>
</div>
</div>

</div>
</div>
</div><!-- end left posts-->
</div>
</div><!-- end  center posts -->

<!-- right posts -->
<div class="col-md-3">
  <!-- Friends activity -->
  <div class="widget">
    <div class="widget-header">
      <h3 class="widget-caption"><i class="fa fa-users"></i> Friends activity</h3>
    </div>
    <div class="widget-body bordered-top bordered-sky">
      <div class="card">
        <div class="content">
         <ul class="list-unstyled team-members">
          <li>
            <div class="row">
              <div class="col-xs-3">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/woman-2.jpg')}}" alt="img" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-xs-9">
                <b><a href="#">Hillary Markston</a></b> shared a 
                <b><a href="#">post</a></b>. 
                <span class="timeago">5 min ago</span>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-3">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/woman-3.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-xs-9">
                <b><a href="#">Leidy marshel</a></b> liked a 
                <b><a href="#">post</a></b>. 
                <span class="timeago">5 min ago</span>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-3">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/woman-4.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-xs-9">
                <b><a href="#">Presilla bo</a></b> comment a 
                <b><a href="#">post</a></b>. 
                <span class="timeago">5 min ago</span>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-3">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/guy-5.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-xs-9">
                <b><a href="#">Martha markguy</a></b> shared a 
                <b><a href="#">post</a></b>. 
                <span class="timeago">5 min ago</span>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-xs-3">
                <div class="avatar">
                  <img src="{{asset('aji/component/img/Friends/guy-4.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-xs-9">
                <b><a href="#">Essien</a></b> shared a 
                <b><a href="#">post</a></b>. 
                <span class="timeago">5 min ago</span>
              </div>
            </div>
          </li>
        </ul>         
      </div>
    </div>
  </div>
</div><!-- End Friends activity -->

<!-- People You May Know -->
<div class="widget">

  <div class="widget-header">
    <h3 class="widget-caption"><i class="fa fa-calendar"></i> Events You May Know</h3>
  </div>
  <div class="widget-body bordered-top bordered-sky">
    <div class="card">
      <div class="content">
        <ul class="list-unstyled team-members">
          <li>
            <div class="row">
              <div class="col-xs-8">
               <a href="#">Event satu dua tiga</a><br>
               <span>120 peoples joined</span>
             </div>

             <div class="col-xs-4 text-right">
              <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
            </div>
          </div>
        </li>
        <li>
          <div class="row">
            <div class="col-xs-8">
             <a href="#">Event satu dua tiga</a><br>
             <span>22 peoples joined</span>
           </div>

           <div class="col-xs-4 text-right">
            <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
          </div>
        </div>
      </li>
      <li>
        <div class="row">
          <div class="col-xs-8">
           <a href="#">Event satu dua tiga</a><br>
           <span>13 peoples joined</span>
         </div>

         <div class="col-xs-4 text-right">
          <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
        </div>
      </div>
    </li>
    <li>
      <div class="row">
        <div class="col-xs-8">
         <a href="#">Event satu dua tiga</a><br>
         <span>13 peoples joined</span>
       </div>

       <div class="col-xs-4 text-right">
        <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
      </div>
    </div>
  </li>
  <li>
    <div class="row">
      <div class="col-xs-8">
       <a href="#">Event satu dua tiga</a><br>
       <span>13 peoples joined</span>
     </div>

     <div class="col-xs-4 text-right">
      <btn class="btn btn-sm btn-azure btn-icon">June 12</btn>
    </div>
  </div>
</li>
</ul>
</div>
</div>          
</div>
</div><!-- End people yout may know -->

</div><!-- end right posts -->
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