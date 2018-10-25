<?php

namespace App\Http\Controllers\frontend;

use App\Model\Member;
use App\Model\Websites;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends FrontendController
{

    public function index(){
        echo "aaa";
    }


    //数据入库和调用广告
    public function deal(Request $request){
        //var_dump($_SERVER);exit;
//        $isMobile = $this->isMobile();
//        if ($isMobile) {
//            var_dump('mobile');
//        } else {
//            var_dump('pc');
//        }
//        $sys = $_SERVER['HTTP_USER_AGENT'];
//        $agent = $_SERVER['HTTP_USER_AGENT'];
//        $uri = $request->getUri();
//        $ip = $request->getClientIp();

        echo "<div id=AdLayer1><a href='http://www.knowsky.com/' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>";
    }

    //输出js代码
    public function getJsCode(Request $request,$memberId,$adsTypeId){
        //先通过$memberId，判断该网站是否通过审核或者该网站是否在存在数据里，如果该网站还没通过审核和不存在，就显示“网站还没通过审核或者不存在”
        $memberInfo = Member::getMemberByMemberId($memberId,2);
        if(empty($memberInfo))
        {
            echo "document.write('站长不存在');";
        }else{
            if($memberInfo[0]['status'] == 0)
            {
                echo "document.write('站长帐号被冻结');";
            }
            //判断来路域名是否已经通过审核
            $url =  $_SERVER['HTTP_REFERER'];
            $domain = $this->get_domain($url);
            $websiteInfo = Websites::existDomain($memberId,1,$domain);
            if(empty($websiteInfo))
            {
                echo "document.write('该域名未通过审核或者不存在');";
            }else{
                echo "
            var xmlhttp;
            if (window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }
            else{
                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            function createRequest(){
                var typeid = ".$adsTypeId."
                var data  = window.location.pathname;
                var url = 'http://www.dailiapi.com/deal';
                xmlhttp.open('post',url,true);
                xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
                xmlhttp.send('uri=' +data+'&adstypeid='+typeid);
                xmlhttp.onreadystatechange=function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.write(xmlhttp.responseText);
                    }
                };
            }
            createRequest();";
            }





            //var_dump($_SERVER);exit;
//            $isMobile = $this->isMobile();
//            if ($isMobile) {
//                var_dump('mobile');
//            } else {
//                var_dump('pc');
//            }

            //echo "document.write(\"<div id=AdLayer1><a href='http://www.knowsky.com' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>\");";



//            echo "
//            var xmlhttp;
//            if (window.XMLHttpRequest){
//                xmlhttp=new XMLHttpRequest();
//            }
//            else{
//                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
//            }
//            function createRequest(){
//                var data  = window.location.pathname
//                var url = 'http://www.dailiapi.com/deal';
//                xmlhttp.open('post',url,true);
//                xmlhttp.setRequestHeader(\"Content-type\",\"application/x-www-form-urlencoded\");
//                xmlhttp.send('uri=' +data);
//                xmlhttp.onreadystatechange=function ()
//                {
//                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                        document.write(xmlhttp.responseText);
//                    }
//                };
//            }
//            createRequest();
//";
        }



//        echo "document.write(\"<div id=AdLayer1><a href='http://www.knowsky.com' target='_blank'><img src='http://addaili.com/resources/views/frontend/pc/ads/ad-01.gif' border='0'></a></div>\");";


    }








}
