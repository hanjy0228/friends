@extends('Home.layouts.main')

@section('content')

<div class="oe_case_detail">
    <div class="left">
        <h1 class="title">{{$list->title}}</h1>
        <img src="/uploads/{{$list->img}}" alt="">
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