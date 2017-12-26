$(document).ready(function(){
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var boxMid = $('.col-md-6 .stickparent').height();
	var boxRight = $('.col-md-3 .stickparent').height();
	var pageHeight = $('.page-content').height();
	var elFooter = $('footer.footer');

	if (winWidth > 767) {
		if (boxMid > boxRight) {
			stickyRight();
		}
		if (pageHeight < winHeight) {
			$(elFooter).addClass('footerAbsolute');
		}
	}
	getMobileOperatingSystem();
});

$(document)
    .on('focus.form-control', 'textarea.form-control', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.form-control', 'textarea.form-control', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight+20) / 17);
        this.rows = minRows + rows;
    });

function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/windows phone/i.test(userAgent)) {
        return "Windows Phone";
    }

    if (/android/i.test(userAgent)) {
        window.location.href = "mobile-android.html";
        return "Android";
    }
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        window.location.href = "mobile-ios.html";
        return "iOS";
    }

    return "unknown";
}

function messagePage() {
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var navbarHeight = $('.navbar').outerHeight();
	var msUserHeight = $('.ms-user').outerHeight();
	var navTabHeight = $('.nav-tabs-messages').outerHeight();
	var actionHeaderHeight = $('.action-header').outerHeight();
	var chatReplyHeight = $('.chatReply').outerHeight();
	if (winWidth > 767) {
		$('.page-content').css({
			'margin-top': navbarHeight+'px',
		});
		$('.tab-content').css({
			height : parseInt(winHeight-msUserHeight-navTabHeight-navbarHeight-60)+'px',
			'overflow' : 'auto'
		});
		$('.chatBody').css({
			height : parseInt(winHeight-actionHeaderHeight-chatReplyHeight-navbarHeight-60)+'px',
			'overflow' : 'auto'
		}).animate({
			scrollTop: $('.message-feed:last-child').offset().top
		}, 1000);
	}

	$('.msb-reply textarea').focus(function() {
		$(this).css({
			'height' : '80px',
		});
		$(this).parent().css({
			'height' : '100px',
		});
		$('#listUploadImagesPost').css({
			'bottom' : '98px',
		});
	});
	$('.msb-reply textarea').keyup(function() {
		if ($(this).val().trim().length > 0) {
			$(this).css({
				'height' : '80px',
			});
			$(this).parent().css({
				'height' : '100px',
			});
			$('#listUploadImagesPost').css({
				'bottom' : '98px',
			});
		} else {
			$(this).removeAttr('style');
			$(this).parent().removeAttr('style');
			$('#listUploadImagesPost').removeAttr('style');
		}
	});
	$('.msb-reply textarea').blur(function() {
		if ($(this).val().trim().length > 0) {
			$(this).css({
				'height' : '80px',
			});
			$(this).parent().css({
				'height' : '100px',
			});
			$('#listUploadImagesPost').css({
				'bottom' : '98px',
			});
		} else {
			$(this).removeAttr('style');
			$(this).parent().removeAttr('style');
			$('#listUploadImagesPost').removeAttr('style');
		}
	});

    $('.people-add').on('change', function(evt, params) {
      var name = $(this).val(),
          avatar = $('option:selected', this).data('img'),
          profileURL = $('option:selected', this).data('profile'),
          jabatan = $('option:selected', this).data('jabatan')
      ;

      $('.table.list-add-people tbody').prepend('<tr><td><img src="'+avatar+'" alt="" class="img-circle img-no-padding img-responsive"><a href="'+profileURL+'" class="user-link">'+$(this).val()+'</a><span class="user-subhead">'+jabatan+'</span></td><td><button class="btn btn-azure pull-right removePeople">Remove</button></td></tr>');
      removePeople();
    });


    $('.people-select').on('change', function(evt, params) {
      var name = $(this).val(),
          avatar = $('option:selected', this).data('img'),
          profileURL = $('option:selected', this).data('profile'),
          jabatan = $('option:selected', this).data('jabatan')
      ;

      $('.table.list-new-group tbody').prepend('<tr><td><img src="'+avatar+'" alt="" class="img-circle img-no-padding img-responsive"><a href="'+profileURL+'" class="user-link">'+$(this).val()+'</a><span class="user-subhead">'+jabatan+'</span></td><td><button class="btn btn-azure pull-right removePeople">Remove</button></td></tr>');
      removePeople();
    });

    removePeople();

    $('.buttonAddParticipant').on('click', function() {
        $('.searchParticipant').toggleClass('show');
    });

	function removePeople() {
		$('.removePeople').on('click', function() {
			$(this).parent().parent().remove();
		});
	}

	$('.editName').on('click', function() {
		$('.inputHide').show();
		$(this).parent().hide();
	});

	$('.triggerSave .btn').on('click', function() {
		$('.inputHide').hide();
		$('.displayGroupName').show();
	});

	$('.buttonEditPhoto a').click(function() {
		$('#avatarGroupInput').trigger('click');
	});

	$('#avatarGroupInput').on('change', function(){
		readURL(this);
	});

	function readURL(input) {
		var url = input.value;
		var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
		if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('.avatarGroupInfo').attr('src', e.target.result);
			};
			reader.readAsDataURL(input.files[0]);
		}else{
			$('.avatarGroupInfo').attr('src', 'img/logo-aji.png');
		}
	}
}

$(function () {
	// Post function sidebar
	$('#textareaPost').focus(function() {
		$('#textareaPost').css({
			'min-height' : '250px',
		});
	});
	$('#textareaPost').blur(function() {
		if ($('#textareaPost').val().trim().length > 0) {
			$(this).css({
				'min-height' : '250px',
				height : 'auto'
			});
		} else {
			$('#textareaPost').css({
				'min-height' : '0',
				height : '46px'
			});
		}
	});
	$('#textareaPost').keyup(function() {
		if ($(this).val().trim().length > 0) {
			$('#buttonPostStatus').removeAttr('disabled');
		} else {
			$('#buttonPostStatus').attr('disabled','disabled');
		}
	});

	// Button on Card function
	$('.postLike').click(function(){
		var postId = $(this).attr('post-id');
		if($(this).hasClass('active')) {
			postUnlike(postId);
		} else {
			postLike(postId);
		}
	});

	// $('.viewMore').click(function() {
	// 	$(this).parent().css({height: 'auto'});
	// });
});

// Button on Card function
function postLike(postId) {
	$('[id*="postLike'+postId+'"]').addClass('active').html('<i class="fa fa-heart"></i> Liked');
}

function postUnlike(postId) {
	$('[id*="postLike'+postId+'"]').removeClass('active').html('<i class="fa fa-heart-o"></i> Like');
}

$('.postComment').click(function() {
	var thisComment = $(this);
	var thisParent = $(thisComment).parent().parent().find('.writeComment').length;
	if (thisParent) {
		$('body, html').animate({
			scrollTop: $(thisComment).parent().parent().find('.writeComment').offset().top-100
		}, 1000);
		$(thisComment).parent().parent().find('.writeComment').focus();
	}
});

$('.replyComment, .replyCommentCount').click(function(){
	$(this).parent().find('.replyCommentList').toggleClass('openComment');
	// $(this).parent().find('.textAreaReply').toggleClass('openReplyTextarea');
	// var eltextAreaReply = $(this).parent().find('.textAreaReply');
	// if(eltextAreaReply.length) {
	// 	// $('body, html').animate({
	// 	// 	scrollTop: $(this).parent().find('.textAreaReply').offset().top-100
	// 	// }, 1000);
	// 	$(this).parent().find('.textAreaReply textarea').focus();
	// }
});

$('.btnReplyImage').click(function() {
	$(this).parent().find('.filesReply').trigger('click');
});


// Sticky sidebar function
function stickyRight() {
    $(window).bind("load", function() {
        $("[data-sticky-column]").stick_in_parent({
            parent: "[data-sticky-parent]",
            offset_top: 80,
            // offset_bottom: 80,
            spacer: ".footer"
        });
    });
}

// Header Search
$('#openSearch').click(function() {
	$('.inputSearch').show();
});
$(document).mouseup(function(e) {
	var container = $('.inputSearch');
	if (!container.is(e.target) && container.has(e.target).length === 0) {
	  container.hide();
	}
});
// End Header Search

// Sticky Post
$(document).ready(function () {
	$('.bxslider').bxSlider({
		mode: 'horizontal',
		slideMargin: 3,
		auto: true,
		speed: 2000,
		autoHover: true,
		controls: false,
		onSlideAfter: function(){
			$(".stickyPost .box .body-status, .stickyPost .bx-viewport").removeClass('hoverSticky');
		}
	});
});
$(".stickyPost .box .body-status").click(function() {
	$(this).toggleClass('hoverSticky');
	$('.stickyPost .bx-viewport').toggleClass('hoverSticky');
});
$('.stickyPost .box-body p.read-more').click(function(){
	$(this).parent().find('.body-status').toggleClass('hoverSticky');
	$('.stickyPost .bx-viewport').toggleClass('hoverSticky');
});
$('.filterPost').click(function(){
	$('.filterPost').parent().removeClass('active');
	$(this).parent().addClass('active');
});
// End Sticky Post

// Image Post
$('#cameraPost, #addMoreImages').click(function() {
	$('#files').trigger('click');
});

function handleFileSelect(evt) {
	var addMoreImages = $('#addMoreImages');
	var listThumb = $('.thumbPreviewImagePost').length;
	$(addMoreImages).addClass('showTrigger');
	// $('#buttonPostStatus').removeAttr('disabled');
	var files = evt.target.files;
	for (var i = 0, f; f = files[i]; i++) {
		if (!f.type.match('image.*')) {
			continue;
		}
		var reader = new FileReader();
		reader.onload = (function(theFile) {
			return function(e) {
				var span = document.createElement('span');
				span.innerHTML = ['<img class="thumbPreviewImagePost" src="', e.target.result,'" alt=""/>','<a class="deleteImagePost">x</a>'].join('');
				document.getElementById('listUploadImagesPost').insertBefore(span, null);
				$('.deleteImagePost').click(function(e) {
					$(this).parent().remove();
				});
			};
		})(f);
		reader.readAsDataURL(f);
	}
}

var inputPostImage = $('#files').length;
if (inputPostImage) {
	document.getElementById('files').addEventListener('change', handleFileSelect, false);
}

$('#addMoreImagesAlbum').click(function() {
	$('#filesAlbum').trigger('click');
});
function handleFileSelectAlbum(evt) {
	var addMoreImages = $('#addMoreImagesAlbum');
	var listThumb = $('.thumbPreviewImagePost').length;
	$(addMoreImages).addClass('showTrigger');
	// $('#buttonPostStatus').removeAttr('disabled');
	var files = evt.target.files;
	for (var i = 0, f; f = files[i]; i++) {
		if (!f.type.match('image.*')) {
			continue;
		}
		var reader = new FileReader();
		reader.onload = (function(theFile) {
			return function(e) {
				var span = document.createElement('span');
				span.innerHTML = [
					'<div class="grid">'+
						'<div class="item-img-wrap">'+
							'<img class="thumbPreviewImagePost" src="', e.target.result,'" alt=""/>','<a class="deleteImagePost">x</a>'+
						'</div>'+
						'<div class="albumDesc">'+
							'<textarea name="" class="form-control" placeholder="write something.."></textarea>'+
						'</div>'+
					'</div>'
				].join('');
				document.getElementById('griPhoto').insertBefore(span, null);
				$('.deleteImagePost').click(function(e) {
					$(this).parent().parent().remove();
				});
			};
		})(f);
		reader.readAsDataURL(f);
	}
}

var inputPostImage = $('#filesAlbum').length;
if (inputPostImage) {
	document.getElementById('filesAlbum').addEventListener('change', handleFileSelectAlbum, false);
}


$('.deleteImagePost').click(function(e) {
	$(this).parent().parent().remove();
});
// End Image Post


// Photos Page

$('.preview-image').on('click', function() {
	$('.show-image-container').removeClass('preview');
	$('.overlayPreviewImage').remove();
	$('body').removeClass('showImageBody');
	var anchorID = $(this).attr('preview-id'),
		posisi = $(this),
		posX = $(posisi).offset().left,
		posY = $(posisi).offset().top;
	$('#show-image-'+anchorID).addClass('preview').css({
		top: 100//posY + 100,
	});
	$('body').addClass('showImageBody');
	$('<div class="overlayPreviewImage"><a class="closePreview"><span class="fa fa-close">').appendTo('body');
	$('.closePreview, .overlayPreviewImage').on('click', function() {
		$('.show-image-container').removeClass('preview');
		$('.overlayPreviewImage').remove();
		$('body').removeClass('showImageBody');
	});
});
// End Photo Page

// Riwayat
$('.addMore, .cancelAdd, .editRiwayat').on('click', function() {
	$('.formAddRiwayat').toggleClass('show');
});
$('.deleteRiwayat').on('click', function() {
	$(this).parent().parent().parent().parent().remove();
});
// End Riwayat


