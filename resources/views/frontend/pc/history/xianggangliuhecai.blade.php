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
    <div class="table h45 history-table" style="background:#FFFFFF;"  data-type="pk10">
        <div class="wrap2 clearfix">
            <li class="a1"><a href="/history/{{$lottery[0]['nickname']}}/" >开奖结果</a></li>
            @for($i=0;$i<count($planNavigations);$i++)
                <li class="a{{$i+2}}"><a href="/plan/{{$lottery[0]['nickname']}}/{{$planNavigations[$i]['p_id']}}" >{{$planNavigations[$i]['plan_name']}}</a></li>
            @endfor
        </div>

        <table cellpadding="0" cellspacing="0" width="100%" id="table-cq_ssc">
            <tbody><tr>
                <th width="120">年份/期数</th>
                <th width="390">正码 + 特码</th>
                <th width="56">特码单双</th>
                <th width="56">特码大小</th>
                <th width="56">总和单双</th>
                <th width="56">总和大小</th>
            </tr>
            @for($i=0;$i<count($historyList);$i++)
                <tr class="tr" id="tr">
                    <td class="time">
                        <span>{{$historyList[$i]['qishu']}}期</span>&nbsp;&nbsp;{{date('Y-m-d',strtotime($historyList[$i]['award_time']))}}
                    </td>
                    <td class="td-num td-cq_ssc">
                        <div class="cai-num pk10-num" style="display: block;">
                            @foreach($historyList[$i]['number'] as $number)
                                <span style="width: 38px; height: 38px;float: left;" class="{{$number['class']}}">{{$number['number']}}</span><em style="float: left;">{{$number['animal']}}</em>
                            @endforeach
                            <b style="float: left">&nbsp;&nbsp;+</b>
                                <span style="width: 38px; height: 38px;float: left;" class="{{$special['class']}}">{{$special['number']}}</span><em style="float: left;">{{$special['animal']}}</em>
                        </div>
                    </td>
                    <td width="55">{!! $historyList[$i]['type2'] !!}</td>
                    <td width="55">{!! $historyList[$i]['type3'] !!}</td>
                    <td width="56">{!! $historyList[$i]['type4'] !!}</td>
                    <td width="56">{!! $historyList[$i]['type5'] !!}</td>
                </tr>
            @endfor
            </tbody></table>


    </div>

@endsection
