<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends FrontendController
{

    //首页默认用重庆时时彩
    public function test(Request $request){
//        return view('frontend.test');
        $uri = $request->input('uri');

        echo $uri.'eeeeee';

    }

    public function getAdPhoto(Request $request,$uid){
        //print_r($_SERVER);
        $data['status'] = 1;
        $data['msg'] = $uid;
        $domain =  $request->getBaseUrl();
        $ip = $request->getClientIp();
        //$uri = $request->getUri();
        echo "
            var xmlhttp; 
            if (window.XMLHttpRequest){ 
                xmlhttp=new XMLHttpRequest();
            } 
            else{ 
                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            function createRequest(){
                var data  = window.location.pathname
                var url = 'http://addaili.com/test';
              
                xmlhttp.open('post',url,true);
                xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
                xmlhttp.send('uri=' +data);
                xmlhttp.onreadystatechange=function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            alert(xmlhttp.responseText);
                    } 
                };    //回调函数
            }
            
            createRequest();
";
//        echo "document.write(\"<div id=AdLayer1><a href='http://www.knowsky.com' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>\");";


    }







}
