<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

use App\Posts;
class MyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user_id=Auth::user()->id;

        // $mypost=Posts::withCount(array("HavePostLikes","HavePostLikes as y" => function($q) use ($user_id){
        //     $q->where('user_id',$user_id)->count();

        // }))->orderBy('id','DESC')->get();

        $mypost = Posts::where('posts.user_id',Auth::user()->id)->withCount([
            'HavePostLikes as me_like' => function ($query) use ($user_id) {
                $query->where('user_id',Auth::user()->id);
            }
        ])->orderBy('posts.id','DESC')->get();


        return View('pages.my-profile.my-profile')
        ->with('user',Auth::user())
        ->with('myposts',$mypost);
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
