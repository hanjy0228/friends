@extends('Home.layouts.main')

@section('content')

<div class="oe_case_detail">
    <div class="left">
        <h1 class="title"  style="margin: 20px 20px 20px 0">{{$list->title}}</h1>
        <img src="/uploads/{{$list->img}}" style="width:700px;height:383px" alt="">
        <div class="des">
            </span>  时间：{{$list->state_time}}
        </div>
        <div class="oe_casecon">
            {{$list->connect}}
        </div>
    </div>
    <div class="clear"></div>
</div>
@stop