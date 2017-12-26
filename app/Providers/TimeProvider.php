<?php


namespace App\Providers;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use DateTime;
use Carbon\Carbon;
class TimeProvider extends ServiceProvider
{

  static  function gTime($time){


    $datetime1 = new DateTime();
    $datetime2 = new DateTime($time);
    $interval = $datetime2->diff($datetime1);

    if(($interval->invert==0)){
      if($interval->y >= 1){
        return $datetime2->format('h:i A d M Y  ');
      }
      else if(($interval->m<=2)AND($interval->m!=0)){
        return $datetime2->format('h:i A d F ');
      }
      else if(($interval->d==1)AND($interval->d!=0)){
        return  $datetime2->format('h:i A').' '.'yesterday';
      }
      else if(($interval->d>=2)AND($interval->d!=0)){
        return $datetime2->format('h:i A').' '.$interval->d.' '.'days ago';
      }
      else if(($interval->h<=24)AND($interval->h!=0)){
        return $interval->h.' '.'hours ago';
      }else if(($interval->i<=60)AND($interval->i!=0)){
        return $interval->i.' '.'minutes ago';
      }else if(($interval->s>=1)AND($interval->s!=0)){
        return $interval->s.' '.'seconds ago';
      }else{
        return $datetime2->format('h:i A d F ');
      }
    }else{
      return $datetime2->format('h:i A d F ');
    }



  }


}
