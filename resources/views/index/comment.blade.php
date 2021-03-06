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

    <div class="clear"></div>
    <!--//main_right End-->

    <div style="margin: 30px;"></div>
    <!--//right_kj End-->

</div>
<!--//user_main End-->

@stop