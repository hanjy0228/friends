@extends('Home.layouts.main')
<link href="/index/css/css.css" rel="stylesheet">
@section('content')
<div class="oe_home" style="background-color: #fff;height: 2000px">
    <div class="oe_hometop">
        <div class="headimg">
            <div class="bd">
                <img class="img" src="../../../uploads/{{$data->img}}" />
            </div>
        <div class="home_info" style="position: absolute;height: 418px;top: 220px;left: 400px;">
            <h3>
                {{$data->nichen}}
            </h3>
            <ul>
                <li><label>用户名：</label> <b>{{$data->nichen}} </b> </li>
                <li><label>内心独白：</label> {{$data->produce}}  </li>
                <li><label>征友状态：</label>@if($data->state==1)
                        进行中
                    @else
                        已关闭
                    @endif</li>
                <li><label>性别：</label><span class="certiconph">
                        @if($data->sex==2)
                            男
                        @else
                            女
                        @endif
                    </span></li>
                <li><label>婚姻状态：</label>
                    @if ($data->maraystate==1)
                        未婚
                    @elseif ($data->maraystate==2)
                        已婚
                    @else
                        离异
                    @endif
                    <span class="certiconph"></span></li>
                <li><label>年龄：</label>{{$data->age}} 岁<span class="certiconph"></span></li>
                <li><label>学历：</label>
                    @if ($data->study==1)
                        高中
                    @elseif ($data->study==2)
                        大专
                    @elseif ($data->study==3)
                        本科
                    @else
                        其他
                    @endif
                    <span class="certiconph"></span></li>
                <li><label>身高：</label>{{$data->height}}CM</li>
                <li><label>月薪收入：</label>{{$data->money}}</li>
                <li><label>所在地区：</label>{{$data->hu}}</li>
                <div class="clear"></div>
            </ul>
            <div class="clear"></div>
            <div class="btn" style="background-color: #fff;border: none">
                <span class="span_2" onClick="artbox_writemsg('162320');"><i></i><a href="si">发私信</a></span>
            </div>
            <div class="main_right" style="width: 860px;border:5px solid #fe5d9d ;border-radius: 20px">
                <div class="div_smallnav_content_hover">
                    <div class="mood-post-form" style="padding-bottom:50px;">
                        <div class="mood-post-content" >
                            <textarea class="mood-textarea" id="mood_content" name="mood_content" onkeydown="textCounter(&#39;mood_content&#39;, &#39;counter&#39;, 500);" onkeyup="textCounter(&#39;mood_content&#39;, &#39;counter&#39;, 500);" onclick="obj_del_wbcontent(&#39;mood_content&#39;);" onblur="obj_attr_wbcontent(&#39;mood_content&#39;);">发表一下对TA的评论吧~</textarea>
                            <div class="fr" style="margin-right:50px; ">
                                <div id="post_limit" class="fl" style="padding-top:5px;">还能输入<span id="counter">500</span>字</div>
                                <div class="mood-post-button" onclick="obj_public_mood(&#39;mood_content&#39;);">
                                    <img src="/index/img/button-mood.gif"></div>
                                <div class="mood-post-cancel"><a href="" onclick="obj_cancel_wbcontent(&#39;mood_content&#39;);">取消</a></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--//mood-post-form End-->
                @foreach($comm as $k => $v)
                    <dl class="weibo_item">
                        <dt>
                            <span><img src="/uploads/{{$v->img}}"></span>
                        <h3>
                            <a>{{$v->nichen}}</a>&nbsp;&nbsp;
                            &nbsp;
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
        </div>
        <div class="clear"></div>
    </div>

</div>
</div>

@stop