@extends('Home.layouts.main')

@section('content')

    <div class="oe_party_list">
        <div class="left">

            <div class="bd">
                @foreach($list as $k=>$v)
                <dl>
                    <dt>
                        <h3>
                            <a href="">{{$list[$k]->title}}</a>
                        </h3>
                        <div class="img">
                            <a href="" class="head"><img src="/index/img/{{$list[$k]->img}}"></a>
                            <span class="ico"> </span>
                        </div>
                    </dt>
                    <dd>
                        <p class="p_1"> {{$list[$k]->content}}</p>
                        <p class="btn">
                            截止日期：{{$list[$k]->time}}
                        <p class="btn">
                        <p class="btn">
                            <a href="active_index?id={{$list[$k]->id}}">查看详情</a>
                        </p>
                    </dd>
                </dl>
                @endforeach
            </div>


        </div>
        <div class="right">
            <div class="oe_partyhelp">
                <div class="hd">活动帮助</div>
                <div class="bd">
                    <dl>
                        <dt>1</dt>
                        <dd>
                            <h3>报名活动</h3>
                            <p>找到感兴趣的活动，提交报名信息；</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>2</dt>
                        <dd>
                            <h3>支付费用</h3>
                            <p>在线支付活动费用，也可以参加活动时现场支付；</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>3</dt>
                        <dd>
                            <h3>准时参加活动</h3>
                            <p>现场签到，参加相亲活动；</p>
                        </dd>
                    </dl>
                    <dl>
                        <dt>4</dt>
                        <dd>
                            <h3>活动结束</h3>
                            <p>有心仪的对象，进一步交往。</p>
                        </dd>
                    </dl>
                </div>
            </div>

            <div class="oe_contact">
                <div class="hd">联系我们</div>
                <div class="bd">
                    <dl>
                        <dt><span><i class="ico_1"></i>电话：</span></dt>
                        <dd>0454-2903018</dd>
                    </dl>
                    <dl>
                        <dt><span><i class="ico_2"></i>邮箱：</span></dt>
                        <dd>womendeai@163.com</dd>
                    </dl>
                    <dl>
                        <dt><span><i class="ico_3"></i>地址：</span></dt>
                        <dd>
                            北京市朝阳区望京东路6号院
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop