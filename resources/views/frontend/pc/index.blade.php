@extends("frontend.pc.layout")

@section('header')
    <div class="web">
        <div class="lottery-list">
            <ul id="box3">
                <div class="kjbanner">
                    <div class="zuo1">
                        <div class="cztp">
                            <img src="/skin/chongqingshishicai.png" style="width:80px; height:80px; border-radius:50%; overflow:hidden;border: 2px solid #FFFFFF;">
                        </div>
                        <div class="wzjs"><p>重庆时时彩</p>10:00-01:55,每天开奖120次</div></div>
                    <div class="zuo2"><div class="kjqs"><p>第20180815071期开奖号码</p></div>
                        <div class="kjjg">
                            <div class="cai-num cqssc">
                                <span class="n2">5</span>
                                <span class="n2">1</span>
                                <span class="n2">2</span>
                                <span class="n2">4</span>
                                <span class="n2">0</span>
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
    aaaaaaaaa
@endsection
