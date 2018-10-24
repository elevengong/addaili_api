<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends FrontendController
{

    public function index(){
        echo "aaa";
    }


    //数据入库和调用广告
    public function deal(Request $request){
//        var_dump($_SERVER);
        $isMobile = $this->isMobile();
        if ($isMobile) {
            var_dump('mobile');
        } else {
            var_dump('pc');
        }
        $uri = $request->input('uri');

        echo "<div id=AdLayer1><a href='http://www.knowsky.com' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>";
    }

    //输出js代码
    public function getJsCode(Request $request,$uid){

        //先通过uid，判断该网站是否通过审核或者该网站是否在存在数据里，如果该网站还没通过审核和不存在，就显示“网站还没通过审核或者不存在”

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
                var url = 'http://www.dailiapi.com/deal';
                xmlhttp.open('post',url,true);
                xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
                xmlhttp.send('uri=' +data);
                xmlhttp.onreadystatechange=function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.write(xmlhttp.responseText);
                    }
                };
            }
            createRequest();
";
//        echo "document.write(\"<div id=AdLayer1><a href='http://www.knowsky.com' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>\");";


    }








}
