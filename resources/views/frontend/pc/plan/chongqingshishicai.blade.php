@extends("frontend.pc.layout")

@section('header')
    <div class="web">
        <div class="lottery-list">
            <ul id="box3">
                <div class="kjbanner">
                    <div class="zuo1">
                        <div class="cztp">
                            <img src="{{url($lotteryPlan[0]['photo'])}}" style="width:80px; height:80px; border-radius:50%; overflow:hidden;border: 2px solid #FFFFFF;">
                        </div>
                        <div class="wzjs"><p>{{$lotteryPlan[0]['lottery']}}</p>{{$lotteryPlan[0]['info3']}}</div></div>
                    <div class="zuo2"><div class="kjqs"><p>第{{$lastestHistory['qishu']}}期开奖号码</p></div>
                        <div class="kjjg">
                            <div class="cai-num cqssc">
                                @foreach(str_split($lastestHistory['number']) as $number)
                                    <span class="n2">{{$number}}</span>
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
    <div class="table h45 history-table"  style="background:#FFFFFF;" data-type="cq_ssc">
        <div class="wrap2 clearfix">
            <li class="a1"><a href="/history/{{$lotteryPlan[0]['nickname']}}/" >开奖结果</a></li>
            @for($i=0;$i<count($planNavigations);$i++)
                <li class="a{{$i+2}}"><a href="/plan/{{$lotteryPlan[0]['nickname']}}/{{$planNavigations[$i]['p_id']}}" >{{$planNavigations[$i]['plan_name']}}</a></li>
            @endfor
        </div>

        <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="table-cq_ssc" >
            <tr>
                <td bgcolor="#FFFFFF" style=" font-size:22px;">{{$lotteryPlan[0]['lottery'].$lotteryPlan[0]['plan_name']}}</td>
            </tr>
            <tr>
                <td bgcolor="#FFFFFF" style=" font-size:14px;">{{$lotteryPlan[0]['info']}}</td>
            </tr>
            <tr>
                <td bgcolor="#FFFFFF" style=" font-size:22px; color:#FF0000">{!! $lotteryPlan[0]['detail1'] !!}</td>
            </tr>
            <tr>
                <td bgcolor="#FFFFFF" style=" font-size:18px;">{!! $lotteryPlan[0]['detail2'] !!}</td>
            </tr>
        </table>
    </div>






@endsection
