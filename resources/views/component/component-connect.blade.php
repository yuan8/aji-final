<script type="text/javascript">
	function theComponentConnect(url,data){

		var data=data;
		data=data;

		var settings = {
			"async": true,
			"crossDomain": true,
			"url": url,
			"method": "POST",

			"headers": {
				"content-type": "application/json",
				"authorization": "Bearer {{Auth::user()->api_token}}",
			},
			"processData": false,
			"data":data
		}
		return settings;
	}

	@if(Auth::user()->profile_photo!='')
	var URL_AVATAR_USER="{{url(Auth::user()->profile_photo)}}";
	@else
	var URL_AVATAR_USER="{{url('aji/component/img/Friends/guy-5.jpg')}}";
	@endif



</script>

<div style='display:none;'>
	<div id="dom-comment-post">
		<div class="box-comment ">
			<img class="img-circle img-sm" src="URL_AVATAR" alt="User Image">
			<div class="comment-text">
				<span class="username">
					<a href="{{url('/user/'.Auth::user()->id.'/show/timeline')}}">USER_NAME</a>
					<a href="#"><span class="text-muted pull-right">x</span></a>
				</span>
				<p style="padding-right: 20px;" id="">
					COMMENT_CONTENT
				</p>
				<div class="actionFooterPost">
					<span id="likeComment2-1" class="likeComment">Like</span>
					· 
					<span id="replyComment2-1" class="replyComment">Reply</span>
					· 
					<span class="likedComment">
						<span class="fa fa-heart-o"></span>0</span>
						· 

						<span class="text-muted">COMMENT_TIME</span>
						<div class="replyCommentContainer">
							<div class="replyCommentCount-new replyCommentCount">
								<span class="fa fa-reply"></span> <span id="comment-replay-count-COMMENT_ID">0</span> replies
							</div>
							<div class="replyCommentList">
								<div class="box-comment">
									<img class="img-circle img-sm" src="URL_AVATAR" alt="User Image">
									<div class="comment-text">
										<div class="textAreaReply">
											<textarea name="" class="form-control input-sm"></textarea>
											<div class="buttonPostReply">
												<button class="btn btnReplyImage"><span class="fa fa-camera"></span></button>
												<button class="btn"><span class="fa fa-paper-plane-o"></span></button>
												<input type="file" name="fileReply" class="filesReply">
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>


	</div>

</div>