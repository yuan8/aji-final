<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts as Post;
use Auth;
class PostCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $post=Post::with('FromUser')
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->where('kanal','national')
        ->where('city_id',Auth::user()->city_id)
        ->orderBy('id','DESC')

        ->paginate(env('API_PAGINATE'));

        return $post;
    }


    public function indexCity($city_id=null,$sorting=null){

        $terkini=null;
        $post=Post::with('FromUser')
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->withCount(
            ['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                }
        ])
        ->where('kanal','kota')
        ->where('posts.city_id',Auth::user()->city_id)

        ->orderBy('id','DESC')
        ->paginate(env('API_PAGINATE'));

        $custom = collect(
            [
                'code' =>(int)env('API_CODE_SUCCESS'),
                'message'=>'success get data post sort by terkini',
                'sort_by'=>'terkini'
            ]
        );
        $post = $custom->merge($post);
        $terkini=$post;
        // default return data
        


        if(isset($sorting)AND($sorting!=NULL)){

            if($sorting=='terkini'){
                $post=Post::with('FromUser')
                ->with(['LikesBy.FromUser','FromCity'])
                ->withCount(['HavePostLikes','HavePostComments'])
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                            $query->where('user_id',Auth::user()->id);
                        }
                ])
                ->where('kanal','kota')
                ->where('posts.city_id',$city_id)

                ->orderBy('id','DESC')
                ->paginate(env('API_PAGINATE'));

                $custom = collect(
                    [
                        'code' =>(int)env('API_CODE_SUCCESS'),
                        'message'=>'success get data post sort by terkini',
                        'sort_by'=>'terkini'
                    ]
                );
                $post = $custom->merge($post);

                return $post;


            }else if($sorting=='terpopuler'){

                $post=Post::with('FromUser')
                ->with(['LikesBy.FromUser','FromCity'])
                ->withCount(['HavePostLikes','HavePostComments'])
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                            $query->where('user_id',Auth::user()->id);
                        }
                    ])
                ->where('kanal','kota')
                ->where('posts.city_id',$city_id)

                ->orderBy('have_post_likes_count','DESC')
                ->paginate(env('API_PAGINATE'));

                $custom = collect(
                    [
                        'code' =>(int)env('API_CODE_SUCCESS'),
                        'message'=>'success get data post sort by terpopuler',
                        'sort_by'=>'terpopuler'
                    ]
                );
                $post = $custom->merge($post);

                return $post;

            }else if($sorting=='terhangat'){

                $post=Post::with('FromUser')
                ->with(['LikesBy.FromUser','FromCity'])
                ->withCount(['HavePostLikes','HavePostComments'])
                ->where('posts.city_id',$city_id)
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                            $query->where('user_id',Auth::user()->id);
                        }
                    ])
                ->where('kanal','kota')
                ->orderBy('have_post_comments_count','DESC')
                ->paginate(env('API_PAGINATE'));

                $custom = collect(
                    [
                        'code' =>(int)env('API_CODE_SUCCESS'),
                        'message'=>'success get data post sort by terhangat',
                        'sort_by'=>'terhangat'
                    ]
                );
                $post = $custom->merge($post);

                return $post;

            }else{
                return $terkini;
            }

        }else{

            return $terkini;
        }
    }


    public function indexNational($sorting=null){

        $terkini=null;
        $post=Post::with('FromUser')
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->withCount(
            ['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                }
        ])
        ->where('kanal','national')
        ->orderBy('id','DESC')
        ->paginate(env('API_PAGINATE'));

        $custom = collect(
            [
                'code' =>(int)env('API_CODE_SUCCESS'),
                'message'=>'success get data post sort by terkini',
                'sort_by'=>'terkini'
            ]
        );
        $post = $custom->merge($post);
        $terkini=$post;
        // default return data




        if(isset($sorting)AND($sorting!=NULL)){

            if($sorting=='terkini'){

                return $terkini;


            }else if($sorting=='terpopuler'){

                $post=Post::with('FromUser')
                ->with(['LikesBy.FromUser','FromCity'])
                ->withCount(['HavePostLikes','HavePostComments'])
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                            $query->where('user_id',Auth::user()->id);
                        }
                    ])
                ->where('kanal','national')
                ->orderBy('have_post_likes_count','DESC')
                ->paginate(env('API_PAGINATE'));

                $custom = collect(
                    [
                        'code' =>(int)env('API_CODE_SUCCESS'),
                        'message'=>'success get data post sort by terpopuler',
                        'sort_by'=>'terpopuler'
                    ]
                );
                $post = $custom->merge($post);

                return $post;

            }else if($sorting=='terhangat'){

                $post=Post::with('FromUser')
                ->with(['LikesBy.FromUser','FromCity'])
                ->withCount(['HavePostLikes','HavePostComments'])

                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                            $query->where('user_id',Auth::user()->id);
                        }
                    ])
                ->where('kanal','national')
                ->orderBy('have_post_comments_count','DESC')
                ->paginate(env('API_PAGINATE'));

                $custom = collect(
                    [
                        'code' =>(int)env('API_CODE_SUCCESS'),
                        'message'=>'success get data post sort by terhangat',
                        'sort_by'=>'terhangat'
                    ]
                );
                $post = $custom->merge($post);

                return $post;

            }else{
                return $terkini;
            }

        }else{

            return $terkini;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $post=Post::with('FromUser')
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->with(['HavePostComments'=>function($q){
            return $q->with('FromUser')
                    ->with('HaveReplayCommentPosts.FromUser')
                    ->withCount('HaveReplayCommentPosts');
        }])
        ->find($id);
        
        if($post){
             return array(
                'code'=>env('API_CODE_SUCCESS'),
                'code'=>$post,
                'message'=>'success get detail post',
            );
        }else{

             return array(
                'code'=>env('API_CODE_ERR'),
                'code'=>null,
                'message'=>'can not get detail post',
            );
        }
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $post=Post::with('FromUser')
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->with(['HavePostComments'=>function($q){
            return $q->with('FromUser')
                    ->with('HaveReplayCommentPosts.FromUser')
                    ->withCount('HaveReplayCommentPosts');
        }])
        ->find($id);
        
        if($post){
             return array(
                'code'=>env('API_CODE_SUCCESS'),
                'code'=>$post,
                'message'=>'success get detail post',
            );
        }else{

             return array(
                'code'=>env('API_CODE_ERR'),
                'code'=>null,
                'message'=>'can not get detail post',
            );
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
