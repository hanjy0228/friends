@extends('Home.layouts.main')

@section('content')
<div class="oe_home">
    <div class="oe_hometop">
        <div class="headimg">
            <div class="bd">
                <img class="img" src="../../../uploads/{{$data->img}}" />
            </div>
            <div class="hd">

                <p class="nodata">TA很懒，还没上传任何照片</p>


                <div class="clear"></div>
            </div>
        </div>
        <div class="home_info">
            <h3>
                {{$data->nichen}}


            </h3>

            <ul>
                <li><label>用户名：</label> <b>{{$data->nichen}} </b> </li>
                <li><label>性别：</label><span class="certiconph">
                        @if($data->sex==1)
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
            <div class="btn">

                <span class="span_2" onClick="artbox_writemsg('162320');"><i></i><a href="si">发私信</a></span>

            </div>
            <div class="main_right">
                <div class="oe_tab_nv">
                    <ul>
                        <li class="tab_item current"><a href="/index/comment">随便看看</a></li>
                    </ul>
                </div>

                <div class="div_smallnav_content_hover">
                    <div class="mood-post-form" style="padding-bottom:50px;">
                        <div class="mood-title"><img src="/index/img/mood.gif"></div>
                        <div class="mood-post-content">
                            <textarea class="mood-textarea" id="mood_content" name="mood_content" onkeydown="textCounter(&#39;mood_content&#39;, &#39;counter&#39;, 500);" onkeyup="textCounter(&#39;mood_content&#39;, &#39;counter&#39;, 500);" onclick="obj_del_wbcontent(&#39;mood_content&#39;);" onblur="obj_attr_wbcontent(&#39;mood_content&#39;);">记录每一天的心情...</textarea>
                            <div class="mood-btn-block">

                            </div>
                            <div class="fr">
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
                            <a href="http://www.wzqsys.com/usercp.php?c=weibo&amp;uid=162049">{{$v->nichen}}</a>&nbsp;&nbsp;
                            &nbsp;
                        </h3>
                        <p class="time">{{$v->time}}</p>
                        </dt>
                        <dd class="text">
                            {{$v->content}}
                        </dd>
                        <dd class="comment" id="comment-20" style="display:none;">
                            <div class="add_com">
                        <textarea id="content_20" name="content_20" class="wb-reply-form-textarea"
                                  onclick="del_comm_content(&#39;20&#39;);" onblur="attr_comm_content(&#39;20&#39;);
">添加评论...</textarea>
                                <div class="wb-reply-btn">
                                    <div class="reply-eif">
                                        <a href="http://www.wzqsys.com/usercp.php?c=weibo###" onclick="show_more_face(&#39;
                                display_eif_20&#39;, &#39;content_20&#39;);"><img src="/index/img/eif.gif">表情</a>
                                    </div>
                                    <div id="display_eif_20"></div>
                                    <input type="button" value="发表评论" class="button-coff" onclick="do_comment(&#39;20&#39;);">
                                </div>
                            </div>
                            <div class="wb-cmlist">
                                <ul id="comlist-20"></ul>
                                <div class="clear"></div>
                            </div>
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
            <div class="intro">
                <span class="icon"></span>
            </div>
            <div class="jubao"  onClick="artbox_complaint('162320');">
                <i></i> 投诉/举报
            </div>


        </div>
        <div class="clear"></div>
    </div>



</div>
@stop