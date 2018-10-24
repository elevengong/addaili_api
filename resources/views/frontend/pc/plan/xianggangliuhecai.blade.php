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
                            <div class="cai-num pk10-num">
                                <table width="350" border="0" align="center" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td align="center" width="20"></td>
                                        @foreach($lastestArray as $lastest)
                                            <td><span style="width: 38px; height: 38px;" class="{{$lastest['class']}}">{{$lastest['number']}}</span><em>{{$lastest['animal']}}</em></td>
                                        @endforeach
                                        <td>+</td>
                                        <td><span style="width: 38px; height: 38px;" class="{{$special['class']}}">{{$special['number']}}</span><em>{{$special['animal']}}</em></td>
                                    </tr>
                                    </tbody>
                                </table>
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

    <meta http-equiv="refresh" content="300">
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
                <td bgcolor="#FFFFFF" style=" font-size:18px;">{!! $lotteryPlan[0]['detail2'] !!}</td>
            </tr>
        </table>
    </div>






@endsection
