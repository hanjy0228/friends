@extends('Home.layouts.main')

@section('content')

    <div style="height:140px;"></div>
    <div class="oe_diary_list">
        <div class="left">
            @foreach($data as $k =>$v)
            <dl>
                <dt>
                    <span><img src="/uploads/{{$v->img}}" alt=""></span>
                </dt>
                <dd>
                    <h3><a href="show_riji?id={{$v->id}}" class="tit" target="_blank" title="爱的方式">
                            {{$v->title}}
                        </a> <span>[婚恋课堂]</span></h3>
                    <p class="text">
                       {{$v->content}}
                    </p>
                    <p class="time">
                        <span>【<a href="show?id={{$v->u_id}}" target="_blank">{{$v->nichen}}</a>】
                            <i></i>{{$v->time}}</span>
                    </p>
                </dd>
                <div class="clear"></div>
            </dl>
            @endforeach
        </div>
        <div class="right">
            <div class="hot_diary">
                <h3><i>热门日记</i></h3>
                <ul>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/31.html">好女孩是这样的</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/5.html">爱情的领悟</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/13.html">关于爱情婚姻</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/27.html">爱与不爱都快乐</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/24.html">切莫背负感情的债</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/33.html">爱的方式</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/32.html">真爱一生能有几回</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/8.html">珍惜现在拥有的吧!</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/9.html">没有爱情会在原地等候</a> </li>
                    <li><i></i><a target="_blank" href="http://www.wzqsys.com/diary/10.html">感恩可以产生爱情吗？</a> </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop