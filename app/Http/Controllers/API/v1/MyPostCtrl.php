<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts as Post;
use Auth;
class MyPostCtrl extends Controller
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
        ->where('posts.user_id',Auth::user()->id)
        ->with(['LikesBy.FromUser','FromCity'])
        ->withCount(['HavePostLikes','HavePostComments'])
        ->withCount(
            ['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                }
        ])
        ->orderBy('id','DESC')
        ->paginate(env('API_PAGINATE'));

        $custom = collect(
            [
                'code' =>(int)env('API_CODE_SUCCESS'),
                'message'=>'success get data my post',
            ]
        );
        $post = $custom->merge($post);

        return $post;

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
