@extends('Home.layouts.main')

@section('content')
<style type="text/css">
    body{background:#EDEFF5;}
</style>
<div class="oe_case_list">

    <div class="left">
        <div class="oe_datalist">
            @foreach($list as $k=>$v)
            <dl class="dl_1 nLi  on ">
                <dt><a href="case_list?id={{$list[$k]->id}}}" rel="nofollow"><img src="../../../uploads/{{$list[$k]->img}}" /></a></dt>
                <dd class="sub" >
                    <p class="p_1"></p>
                    <div>
                        <h3><a href="case_list?id={{$list[$k]->id}}">{{$list[$k]->title}}</a></h3>
                        <p class="p_2"><a href="case_list?id={{$list[$k]->id}}" rel="nofollow">查看详情</a></p>
                    </div>
                </dd>
            </dl>
            @endforeach

            <div class="clear"></div>

        </div>

    </div>


    <div class="right">
        <div class="oe_rightcase">
            <h3><span>幸福瞬间</span></h3>
            <div class="oe_rightcasecon">
                @foreach($list as $k=>$v)
                <ul>
                    <li>
                        <p class="img">
                            <a href="case_list?id={{$list[$k]->id}}"><img src="../../../uploads/{{$list[$k]->img}}" /></a>
                        </p>
                        <h4><a href="case_list?id={{$list[$k]->id}}">{{$list[$k]->title}}</a></h4>
                    </li>
                </ul>
                @endforeach

            </div>
        </div>
    </div>
    <div class="clear"></div>

</div>

<script type="text/javascript">
    $(function(){
        jQuery(".oe_case_list").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
    });
</script>
@stop
