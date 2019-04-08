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
                    <li><i></i><a target="_blank" href="show_riji?id=3">婚姻与爱情</a> </li>
                    <li><i></i><a target="_blank" href="show_riji?id=2">爱情的领悟</a> </li>
                    <li><i></i><a target="_blank" href="show_riji?id=4">好女孩是这样的</a> </li>
                    <li><i></i><a target="_blank" href="show_riji?id=5">真爱难得</a> </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop