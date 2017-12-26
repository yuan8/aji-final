

<!-- parent data save variable $post fro post -->


<div class="modal fade modal-small" id="modal-likes-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-likes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-likes">{{$post->HavePostLikes->count()}} Likes</h4>
            </div>
            <div class="modal-body text-centers">
                <div class="table-responsive">
                    <table class="table user-list">
                        <tbody>
                            @foreach($post->HavePostLikes as $like)
                            <tr>
                                <td>
                                    <img src="{{asset('aji/component/img/Friends/guy-2.jpg')}}" alt="" class="img-circle img-no-padding img-responsive">
                                    <a href="profile.html" class="user-link">{{$like->FromUser->name}}</a>
                                    <span class="user-subhead">Ketua Umum</span>
                                </td>
                                <td>
                                    @if($like->FromUser->id != Auth::user()->id)
                                  <a href="messages.html" class="btn btn-azure pull-right">Message</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>