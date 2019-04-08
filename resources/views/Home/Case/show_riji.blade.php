@extends('Home.layouts.main')

@section('content')

    <div class="oe_case_detail">
        <div class="left">
            <h1 class="title"  style="margin: 20px 20px 20px 0">{{$list->title}}</h1>
            <div class="des">
                </span>  时间：{{$list->time}}
            </div>
            @foreach($data as $k=>$v)
            <div class="des">
                </span>  作者：{{$v->nichen}}
            </div>
            @endforeach
            <div class="oe_casecon">
                {{$list->content}}
            </div>
        </div>
        <div class="clear"></div>
    </div>
@stop