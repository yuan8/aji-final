 <div id="upload-avatar-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Priview</h4>
      </div>
      <div class="modal-body">
        <div class="cover profile">
          <div class="image">
          <img src="http://localhost:8000/aji/component/img/Cover/profile-cover.jpg" class="show-in-modal" alt="people">
        </div>
          <div class="cover-info">
            <div class="avatar" style="left:0; right: 0; margin:auto; width:300px">
              <img src="" required id="photo-view-avatar" class="img-responsive" style="width: 300px; height: 300px;">
            </div>
          </div>
        </div>


      </div>
      <div class="modal-footer ">
        <div class="btn-group">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-azure " onclick="uploadAvatar()">Upload</button>
        </div>

        
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">

  document.getElementById('avatar-change').addEventListener('change', showLandingPhoto, false);

  function showLandingPhoto(evt){
    $('#upload-avatar-modal').modal();

    var file=(evt.target.files[0]);
    var reader = new FileReader();
    reader.onload= (function(thefile){

      return function(e){ 
        $('#photo-view-avatar').attr('src',e.target.result);
      }
    })(file);

    reader.readAsDataURL(file);
  }

  function uploadAvatar(){
    $('#posting-upload-avatar').submit();
  }

</script>