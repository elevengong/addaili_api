<?php

namespace App\Http\Controllers\frontend;

use App\Model\Contact;
use App\Model\Lottery;
use App\Model\Navigation;
use App\Model\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class FrontendController extends Controller
{
    protected $navigations;
    protected $contact;
    protected $lotterys;
    protected $showNum;
    protected $title;

//    public function __construct()
//    {
//
//    }

    protected function getPlanListByLid($l_id){
        $plan = Plan::select('p_id','plan_name')->where('l_id',$l_id)->where('status',1)->orderBy('priority','desc')->get()->toArray();
        return $plan;
    }

    protected function getColor($number){
        $red = '.01.02.07.08.12.13.18.19.23.24.29.30.34.35.40.45.46.';
        $blue = '.03.04.09.10.14.15.20.25.26.31.36.37.41.42.47.48.';
        $green = '.05.06.11.16.17.21.22.27.28.32.33.38.39.43.44.49.';
        if(strpos($red,'.'.$number.'.') !== false)
        {
            return 'hongbo';
        }
        if(strpos($blue,'.'.$number.'.') !== false)
        {
            return 'lanbo';
        }
        if(strpos($green,'.'.$number.'.') !== false)
        {
            return 'lvbo';
        }

    }


}
