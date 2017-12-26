<?php


namespace App\Http\Controllers\pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

use App\Posts;
class SearchController extends Controller
{
    //


    public function array_orderby()
		{
		    $args = func_get_args();
		    $data = array_shift($args);
		    foreach ($args as $n => $field) {
		        if (is_string($field)) {
		            $tmp = array();
		            foreach ($data as $key => $row)
		                $tmp[$key] = $row[$field];
		            $args[$n] = $tmp;
		            }
		    }
		    $args[] = &$data;
		    call_user_func_array('array_multisort', $args);
		    return array_pop($args);
		}


    public function search(Request $request){


    	$result=array();


    	$result1=User::
   		select("*", DB::raw('REPLACE(SUBSTRING_INDEX(created_at," ",1),"-", "") AS inx '))
    	->where('name','like',('%'.$request->q.'%'))
    	->orWhere('email','like', ('%'.$request->q.'%'))
    	->limit(10)->get();

    	foreach ($result1 as  $v) {
    		array_push($result, array('index'=>(int)$v->inx,'type'=>'user','data'=>$v));
    	}


    	$result2=Posts::with('FromUser')->
    	select("*", DB::raw('REPLACE(SUBSTRING_INDEX(posts.created_at," ",1),"-", "") AS inx '))
    	->where('content','like',('%'.$request->q.'%'))
    	->limit(10)->get();

    	foreach ($result2 as  $v) {
    		array_push($result, array('index'=>(int)$v->inx,'type'=>'post','data'=>$v));
    	}

    	$result = $this->array_orderby($result, 'index', SORT_DESC);

    	

		 return view('pages.search.search')
    	->with('q',$request->q)
    	->with('results',$result);


    } 
}
