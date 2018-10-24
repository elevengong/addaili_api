<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <meta name="description" content="熊猫彩票时时彩计划网提供最全的香港六合彩,北京赛车,重庆时时彩,幸运飞艇,江苏快三,广东11选5,广东快乐十分,新疆时时彩,幸运农场,新疆11选5,河北快三,上海快三,安徽快三,广西快三,上海11选5开奖历史记录查询！"/>
    <meta name="keywords" content="熊猫彩票,彩票计划网,时时彩计划,北京赛车计划,PK10计划"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>

<body>
﻿<link type="text/css" href="{{asset('/resources/views/frontend/pc/css/page.css')}}" rel="stylesheet"/>
<link type="text/css" href="{{asset('/resources/views/frontend/pc/css/index.css')}}" rel="stylesheet"/>
<div class="header">
    <div class="top">
        <div class="wrap clearfix">
            @foreach($navigations as $navigation)
            <li class="a1"><a href="{{$navigation['link']}}" @if($navigation['outlink'] == 1)target="_blank"@endif>{{$navigation['nav_name']}}</a></li>
            @endforeach
        </div>
    </div>
</div>

@yield('header')

<div class="header">
    <div class="top">
        <div class="web">
            <div class="lottery-list">
                <ul id="box3">
                </ul>
            </div>
        </div>
        ﻿<div class="header">
            <div class="top">

                <div class="wrap1 clearfix">
                    @for($i=0;$i<count($lotterys);$i++)
                    <li class="s{{$i+1}}"><a href="{{url('/history/'.$lotterys[$i]['nickname'])}}"><i><img src="{{url($lotterys[$i]['photo'])}}" width="58" height="58"></i><br>{{$lotterys[$i]['lottery']}}</a></li>
                    @endfor
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="10"></td>
                        </tr>
                    </table>
                        @if(!empty($adsList))
                        <div style="width: 100%;text-align: center;">
                           @foreach($adsList as $ads)
                           <a target="_blank" href="{{$ads['link']}}"><img style="margin-top: 5px;" src="{{$ads['photo']}}" alt="{{$ads['name']}}" border="0"></a>
                           @endforeach
                        </div>
                        @endif
                </div>

            </div>
        </div>

        <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td></td>
            </tr>
        </table>
        <div style="width:1000px; background-color:#FFFFFF;margin-right: auto;margin-left: auto;">
            @yield('content')
        </div>
        ﻿<div class="footer">
            <div class="copyright">
                <p>Copyright © 2016-2018 熊猫彩票计划网 All Rights Reserved.</p>
                <p>
            </div></div>
</body>
</html>