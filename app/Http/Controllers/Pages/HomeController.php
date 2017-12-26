<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Cities;
use Auth;
use App\Event;
use App\Posts;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sorting,$id_city=null,$city=null)
    {
        //


        if((!$sorting)){
            return redirect('home/terkini/'.Auth::user()->FromCity->id.'/'.Auth::user()->FromCity->name);
        }

        if(($id_city==0)AND(!$city)){
            return redirect('home/'.$sorting.'/0/national');
        }else{

            if((Cities::find($id_city)!=null)AND(!$city)){
                $city=Cities::find($id_city);
                return redirect('home/'.$sorting.'/'.$id_city.'/'.$city->name);
            }
        }

        if((!$id_city)AND($id_city!=0)){
            return redirect('home/terkini/'.Auth::user()->FromCity->id.'/'.Auth::user()->FromCity->name);
        }

      

        $view_r=View('pages.home.home');

        if($sorting=='terkini'){

            if($id_city!=0){

                $posts=Posts::where('city_id',$id_city)
                ->Where('kanal','!=','national')
                ->orderBy('created_at','DESC')
                ->withCount(['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                },'HavePostLikes as like','HavePostComments as comment'])
                ->paginate(10); 
            }else{

                $posts=Posts::Where('kanal','national')
                ->orderBy('created_at','DESC')
                ->withCount(['HavePostLikes as me_like'=>function($query){
                    $query->where('user_id',Auth::user()->id);
                },'HavePostLikes as like','HavePostComments as comment'])
                ->paginate(10); 

            }



        }else if($sorting=='terpopuler'){

            if($id_city!=0){
                $posts=Posts::where('city_id',$id_city)
                ->where('kanal','!=','national')
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                        $query->where('user_id',Auth::user()->id);
                    },'HavePostLikes as like','HavePostComments as comment'])
                ->orderBy('like_count','DESC')

                ->paginate(10); 
            }else{
                $posts=Posts::where('kanal','national')
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                        $query->where('user_id',Auth::user()->id);
                    },'HavePostLikes as like','HavePostComments as comment'])
                ->orderBy('like_count','DESC')

                ->paginate(10); 
            }



        }else if($sorting=='terhangat'){
            if($id_city!=0){
                $posts=Posts::where('city_id',$id_city)
                ->Where('kanal','!=','national')
                ->orderBy('comment_count','DESC')
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                        $query->where('user_id',Auth::user()->id);
                    },'HavePostComments as comment','HavePostLikes as like'])
                ->paginate(10); 

            }else{
                $posts=Posts::Where('kanal','national')
                ->orderBy('comment_count','DESC')
                ->withCount(
                    ['HavePostLikes as me_like'=>function($query){
                        $query->where('user_id',Auth::user()->id);
                    },'HavePostComments as comment','HavePostLikes as like'])
                ->paginate(10); 
            }

        }else{
            return redirect('home/terkini/'.Auth::user()->FromCity->id.'/'.Auth::user()->FromCity->name);


        }


        $events=Event::orderBy('created_at','DESC')->withCount(['haveEventReservations as joined'=>
            function($query){
                return $query->where('is_approved',true);
            }
        ])->get();

        if(Auth::user()->role==3){


            $cities=Cities::all();
            $friendActivities=User::where('id','!=', Auth::user()->id)->orderBy('id','DESC')->get()->take(5); 
            return  $view_r
            ->with('cities',$cities)
            ->with('friendActivities',$friendActivities)
            ->with('select_city',$id_city)
            ->with('posts',$posts)
            ->with('events',$events)

            ->with('post_sorting',$sorting);
        }else{
           
            $cities=Cities::all();
            $friendActivities=User::where('id','!=', Auth::user()->id)->orderBy('id','DESC')->get()->take(5); 
            return  $view_r
            ->with('cities',$cities)
            ->with('friendActivities',$friendActivities)
            ->with('select_city',$id_city)
            ->with('posts',$posts)
            ->with('events',$events)

            ->with('post_sorting',$sorting);
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
