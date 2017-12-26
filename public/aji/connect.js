
// header


var API_V="/api/v1/";



function likePostEvent(post_id,url){

  var setting=theComponentConnect(url+post_id,null);

  $.ajax(setting).done(function (response) {
    var likeCount=parseInt( $('#count-like-post-'+post_id).html());
    console.log(response.data.code);
    if(response.code==200){
      if(response.data.like){
        likeCount=likeCount+1;
        $('#count-like-post-'+post_id).html(likeCount);
        $('#likePost-view-'+post_id).addClass('active');
        $('#likePost-view-'+post_id).html('<i class="fa fa-heart"></i> Liked');

      }else{
        likeCount=likeCount-1;
        $('#count-like-post-'+post_id).html(likeCount);
        $('#likePost-view-'+post_id).removeClass('active');
        $('#likePost-view-'+post_id).html('<i class="fa fa-heart-o"></i> Like');
      }

    }

  });

}




function commentPostPublishEvent(post_id){

 
  var Theme=$('#dom-comment-post').html();


  $('#spining-send-comment-post-'+post_id).css('display','block');
  $('#btn-send-comment-post-'+post_id).css('display','none');
  var url=URL_THIS+API_V+"post/"+post_id+"/comment/add/";

  var data={
    content:$('#input-content-comment-post-'+post_id).val()
  }

  data=(JSON.stringify(data));

  var setting=theComponentConnect(url,data);


  $.ajax(setting).done(function (response) {
    if(response.code==200){
      $('#input-content-comment-post-'+post_id).val('')

        var dom=Theme;
        dom=dom.replace(/COMMENT_CONTENT/g,response.data.content);
        dom=dom.replace(/USER_ID/g,response.data.from_user.id);
        dom=dom.replace(/USER_NAME/g,response.data.from_user.name);
        // dom=dom.replace(/COMMENT_TIME/g,ytime(response.data.created_at));
        dom=dom.replace(/COMMENT_TIME/g,'1 seconds ago');
        dom=dom.replace(/URL_AVATAR/g,URL_AVATAR_USER);
        dom=dom.replace(/COMMENT_ID/g,response.data.id);




        var count=parseInt($('#count-comment-post-'+post_id).html())+1;
        $('#count-comment-post-'+post_id).html(count);

        $('#comment-place-post-'+post_id).append(dom);
        $('#spining-send-comment-post-'+post_id).css('display','none');
        $('#btn-send-comment-post-'+post_id).css('display','block');
        showReplayCommentEventListener();
    }


  });




}


function showReplayCommentEventListener(){
  $('.replyCommentCount-new').click(function(){
  $(this).parent().find('.replyCommentList').toggleClass('openComment');
  // $(this).parent().find('.textAreaReply').toggleClass('openReplyTextarea');
  // var eltextAreaReply = $(this).parent().find('.textAreaReply');
  // if(eltextAreaReply.length) {
  //  // $('body, html').animate({
  //  //  scrollTop: $(this).parent().find('.textAreaReply').offset().top-100
  //  // }, 1000);
  //  $(this).parent().find('.textAreaReply textarea').focus();
  // }
});
}


function viewAllComment(button){
    var post_id=$(button).attr('post-id');

    if($(button).attr('viewed')=='hidden'){
      $('.comment-list-post-'+post_id+'.comment-hidden').css('display','block');
      $(button).attr('viewed','show');
      $(button).html('<a class="text-capitalize">show less comments</a>');
    }else{
       $('.comment-list-post-'+post_id+'.comment-hidden').css('display','none');
      $(button).attr('viewed','hidden');
      $(button).html('<a class="text-capitalize">View All comments</a>');

    }

}


function moreContentPost(post_id){

    $('#post-content-preview-'+post_id).css('display','none');
    $('#post-content-full-'+post_id).css('display','block');


}

function moreContentComment(comment_id){
   $('#comment-content-preview-'+comment_id).css('display','none');
    $('#comment-content-full-'+comment_id).css('display','block');
}


function settingAboutEvent(setting){



    var data='{'+'"'+$(setting).attr('id')+'"'+':'+''+$(setting).prop('checked')+''+'}';

    data=JSON.parse(data);
    data=JSON.stringify(data);
    var url=URL_THIS+API_V+"setting-about";
    var setting=theComponentConnect(url,data);

     $.ajax(setting).done(function (response) {
      if(response.code==200){

        console.log(response);
      }

    });
   

}



