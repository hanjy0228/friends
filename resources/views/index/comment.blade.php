@extends('index.layous.qianindex')

@section('content')
    <!--//user_main_left End-->



    <div class="main_right">
        <div class="div_smallnav_content_hover">

            <!--//mood-post-form End-->
            @foreach($comm as $k => $v)
            <dl class="weibo_item">
                <dt>
                    <span><img src="/uploads/{{$v->img}}"></span>
                    <h3>
                    <a href="/show?id={{$v->p_id}}" >{{$v->nichen}}</a>
                    &nbsp;&nbsp;
                    @if($v->state==0)
                        未查看
                    @else
                        已查看
                    @endif
                    <a href="/index/see_comment?id={{$v->id}}">查看</a>
                    </h3>
                    <p class="time">{{$v->time}}</p>
                </dt>
                <dd class="text">
                   {{$v->content}}
                </dd>
            </dl>
        @endforeach
            <div class="weibo-item" style="display:none;">
                <div class="weibo-left">
                    <div class="weibo-time">2013/01/22 16:42</div>
                    <div class="weibo-button">
                        <p>
                            <a href="http://www.wzqsys.com/usercp.php?c=weibo###" onclick="artbox_hi(&#39;162049&#39;);">打招呼</a>&nbsp;&nbsp;<a href="http://www.wzqsys.com/usercp.php?c=weibo###" onclick="artbox_writemsg(&#39;162049&#39;);">写信件</a><br>
                            <span id="tips_listen_20"><a href="http://www.wzqsys.com/usercp.php?c=weibo###" class="pcbtn-green" onclick="obj_action_listen(&#39;162049&#39;, &#39;listen&#39;, &#39;tips_listen_20&#39;);">+加关注</a></span>
                        </p>
                    </div>
                </div>
                <!--//weibo-left End-->
        </div>



    <div class="clear"></div>
    <!--//main_right End-->

    <div style="margin: 30px;"></div>
    <!--//right_kj End-->

</div>
<!--//user_main End-->

@stop