@extends("frontend.pc.layout")

@section('header')
    <div class="web">
        <div class="lottery-list">
            <ul id="box3">
                <div class="kjbanner">
                    <div class="zuo1">
                        <div class="cztp">
                            <img src="{{url($lottery[0]['photo'])}}" style="width:80px; height:80px; border-radius:50%; overflow:hidden;border: 2px solid #FFFFFF;">
                        </div>
                        <div class="wzjs"><p>{{$lottery[0]['lottery']}}</p>{{$lottery[0]['info']}}</div></div>
                    <div class="zuo2"><div class="kjqs"><p>第{{$lastestHistory['qishu']}}期开奖号码</p></div>
                        <div class="kjjg">
                            <div class="cai-num  pk10-num left5">
                                @foreach(explode(',',$lastestHistory['number']) as $number)
                                    <span class="n{{$number}}">{{$number}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="zuo3">
                        <div class="smwz">
                            <p>购彩中心【熊猫彩票】</p>团队微信号：{{$contact['weixin']}}<br>团队QQ号：{{$contact['qq']}}
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endsection

@section('content')

    <meta http-equiv="refresh" content="30">
    <div class="table h45 history-table" style="background:#FFFFFF;"  data-type="pk10">
        <div class="wrap2 clearfix">
            <li class="a1"><a href="/history/{{$lottery[0]['nickname']}}/" >开奖结果</a></li>
            @for($i=0;$i<count($planNavigations);$i++)
                <li class="a{{$i+2}}"><a href="/plan/{{$lottery[0]['nickname']}}/{{$planNavigations[$i]['p_id']}}" >{{$planNavigations[$i]['plan_name']}}</a></li>
            @endfor
        </div>

        <table cellpadding="0" cellspacing="0" width="100%" id="table-pk10">
            <tbody>
            <tr>
                <th width="140">时间</th>
                <th width="410">
                    开奖号码
                </th>
                <th width="151" colspan="3">冠亚和</th>
                <th width="254" colspan="5">1-5龙虎</th>
            </tr>
            @foreach($historyList as $history)
                <tr class="tr" id="tr-{{$history['number']}}">
                    <td class="time">
                        <span>{{$history['qishu']}}</span>&nbsp;&nbsp;{{date('H:i:s',strtotime($history['award_time']))}}
                    </td>
                    <td class="td-num td-pk10">
                        <div class="td-box cai-num size-32 center pk10-num" style="display: block;">
                            @foreach(explode(',',$history['number']) as $number)
                                <span class="n{{$number}}" data-num="{{$number}}">{{$number}}</span>
                            @endforeach
                        </div>
                    </td>
                    <td width="56">{{$history['type1']}}</td>
                    <td width="56">{{$history['type2']}}</td>
                    <td width="56">{{$history['type3']}}</td>
                    <td width="56">{{$history['type4']}}</td>
                    <td width="56">{{$history['type5']}}</td>
                    <td width="56">{{$history['type6']}}</td>
                    <td width="56">{{$history['type7']}}</td>
                    <td width="56">{{$history['type8']}}</td>
                </tr>
            @endforeach
            </tbody></table>


    </div>

@endsection
