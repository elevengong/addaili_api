<?php

namespace App\Http\Controllers\frontend;

use App\Model\Ads;
use App\Model\Member;
use App\Model\Statistics;
use App\Model\Websites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class IndexController extends FrontendController
{

    public function index(){
        echo "aaa";
    }


    //数据入库和调用广告
    public function deal(Request $request){
        //var_dump($_SERVER);exit;
        $isMobile = $this->isMobile();
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
//            $url =  $_SERVER['HTTP_REFERER'];
//            $domain = $this->get_domain($url);
//            $websiteInfo = Websites::existDomain($memberId,1,$domain);
            $url = '';
            $domain = '';
            $websiteInfo = true;
            if(empty($websiteInfo))
            {
                echo "document.write('该域名未通过审核或者不存在');";
            }else {
                //竞价排名，获取符合要求单价最高的广告
                $adsList = Ads::where('status',1)->where('ads_type',$adsTypeId)->orderBy('ads_per_cost','desc')->get()->take(1)->toArray();
                if(empty($adsList))
                {
                    echo "document.write('没有找到符合要求的广告');";
                }else{
                    //入库
                    $ip = $request->getClientIp();
                    $statisticsData = array(
                        'ip' => $ip,
                        'webmaster_id' => $memberId,
//                        'web_id' => $websiteInfo[0]['web_id'],
                        'web_id' => '1',
                        'web_domain' => $domain,
                        'come_url' => $url,
                        'adsmember_id' => $adsList[0]['member_id'],
                        'ads_id' => $adsList[0]['ads_id'],
                        'click_status' => '0',
                        'region' => '',
                        'region_id' => '',
                        'city' => '',
                        'city_id' => '',
                        'visit_time' => date('Y-m-d h:i:s',time()),
                        'ismobile' => '',
                        'vistor_system' => '',
                        'vistor_exploer' => '',
                        'earn_money' => '1'
                    );
                    $isMobile = $this->isMobile();
                    if ($isMobile) {
                        $statisticsData['ismobile'] = 1;
                    } else {
                        $statisticsData['ismobile'] = 0;
                    }
                    $sys = $_SERVER['HTTP_USER_AGENT'];
                    $statisticsData['vistor_system'] = $this->get_os($sys);
                    $statisticsData['vistor_exploer'] = $this->get_broswer($sys);
                    Statistics::create($statisticsData);
                    //扣减该广告的余额
                    DB::table('ads')->where('ads_id', $adsList[0]['ads_id'])->update(array(
                        'ads_amount_cost' => DB::raw('ads_amount_cost + '.$adsList[0]['ads_per_cost']),
                        'ads_balance'  => DB::raw('ads_balance - '.$adsList[0]['ads_per_cost']),
                        'show_times'  => DB::raw('show_times + 1 '),
                    ));

                    //展示广告
                    $adShow =  "document.write(\"<div id=AdLayer1><a href='".$adsList[0]['ads_link']."' target='_blank'><img src='".$adsList[0]['ads_photo']."' border='0'></a></div>\");";
                    echo $adShow;



                }



            }



        }
    }

    public function click(Request $request,$ads_id){


    }







}
