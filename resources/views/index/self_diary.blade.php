<!DOCTYPE html>
<!-- saved from url=(0042)http://www.wzqsys.com/usercp.php?c=profile -->
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="author" content="OEdev">
    <meta name="generator" content="OElove">
    <title>修改资料-牵手</title>
    <link href="/index/css/oe_varpop.css" rel="stylesheet">
    <link href="/index/css/css.css" rel="stylesheet">
    <script type="text/javascript">
        var _ROOT_PATH = "/";
    </script>
    <script type="text/javascript" src="/index/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/index/css/default.css">
    <link rel="stylesheet" href="/css/jdlogin.css">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/index/js/jquery.artDialog.source.js"></script>
    <script type="text/javascript" src="/index/js/iframeTools.js"></script>
    <script type="text/javascript" src="/index/js/public.js"></script>
    <script type="text/javascript" src="/index/js/ajax.js"></script>
    <script type="text/javascript" src="/index/js/artbox.js"></script>
    <script type="text/javascript" src="/index/js/WdatePicker.js"></script>
    <link href="/index/css/WdatePicker.css" rel="stylesheet" >
    <script type="text/javascript" src="/index/js/oe_varpop.js"></script>
    <script type="text/javascript" src="/index/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 7]>
    <script type='text/javascript' src='/tpl/static/js/DD_belatedPNG-min.js'></script>
    <script>
        DD_belatedPNG.fix('.user_logo, .shadow');
    </script>
    <![endif]-->
    <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                var explorer = window.navigator.userAgent;
                var scrollTops = 0;
                if (explorer.indexOf("Chrome") >= 0 || explorer.indexOf("Safari") >= 0) {
                    var scrollTops = document.body.scrollTop;
                } else {
                    scrollTops = document.documentElement.scrollTop;
                }
                if (parseInt(scrollTops) >= 70) {
                    $(".right_kj").slideDown("slow");
                } else {
                    $(".right_kj").slideUp("slow");
                }
            });
        });

    </script>
</head>
<body><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="http://www.wzqsys.com/usercp.php?c=profile###">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr style="display:none;"><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>

<div style="width:100%;height:75px;"></div>
<script type="text/javascript">
    $(function() {
        $(".user-top-tips").on ({
            mouseover: function() {
                $("div[name='tip_title']").removeClass("user-top-tips").addClass("user-top-tips-on");
                $(".user-top-tips-list").show();
            },
            mouseout: function() {
                $("div[name='tip_title']").removeClass("user-top-tips-on").addClass("user-top-tips");
                $(".user-top-tips-list").hide();
            }
        });
    });
</script>
<div class="nav0">
    <div class="oe_top">
        <div class="oe_topcon">
            <div class="left">欢迎来到牵手一生婚恋</div>
            <div class="right drop">
                <div class="login">
                    <a class="a_1" href="login" onclick="artbox_loginbox();" class="alogin"  rel="nofollow">登录</a><a  rel="nofollow" class="a_2" href="admin" class="areg">注册</a>
                    <a  rel="nofollow" class="a_2" href="/logout"   class="areg">退出</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="oe_nav">
        <div class="oe_navcon">
            <div class="logo">
                <a href="index.php"><img class="logo" src="../../../../img/79afd9d32145a106.png"  alt="牵手一生婚恋" /></a><img class="line" src="../../../../img/line.png" alt="" />
                <div class="clear"></div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="/.">首页</a></li>
                    <li><a href="/riji">日记</a></li>
                    <li><a href="/index/self">个人中心</a></li>
                    <li><a href="/case">幸福案例</a></li>
                    <li><a href="/active">不见不散</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div style="height:160px;"></div>
<div class="user_main">
    <div class="oe_bn"><span></span>会员中心 &gt;&gt; 我的资料</div>
    <div class="user_main_left">
        <div class="oe_index_uL_top">
            <div class="oe_index_uL_head">
                <dl>
                    <dt>
                        <a href="/show?id={{$datas->id}}"><img src="/uploads/{{$datas->img}}" title="设置头像"></a>
                    </dt>
                    <dd>
                        <h2><img src="/index/img/f2fde8e7d8aa2a10.gif" border="0" class="">{{$datas->nichen}}</h2>
                        <h3><a href="/index/self" target="_blank">查看我的主页</a></h3>
                    </dd>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>
            <div class="oe_uL_rz">
                <div class="oe_uL_rz_name">
                    征友状态：
                    <?php if($datas->state == 1){ ?>
                    进行中
                    <?php }else{ ?>
                    关闭
                    <?php }   ?>
                    <a href="/index/upd_state">修改</a>
                </div>
            </div>
            <div class="mu_profile">
                <a href="/index/self" class="a_2">完善资料</a>
            </div>
        </div>
        <div class="oe_hr"></div>
        <div class="u_menu">
            <ul>
                <li>
                    <i class="ico_2"></i><a href="/index/self_message">私信</a>
                </li>
                <li>
                    <i class="ico_2"></i><a href="/index/comment">评论</a>
                </li>
                <li><i class="ico_7"></i><a href="/index/zan">赞</a></li>
                <li><i class="ico_7"></i><a href="/index/self_diary">日记</a></li>
            </ul>
        </div>


    </div>

    <!--//user_main_left End-->

    <div class="main_right">
        <div class="oe_tab_nv">
            <ul>
                <li class="tab_item current"><a href="/index/self_diary">我的日记</a></li>
                <li class="tab_item"><a href="/index/self_send_diary">发表日记</a></li>
            </ul>
        </div>
        @foreach($data as $k => $v)
        <div class="div_smallnav_content_hover">
            <div class="oe_diary_list">
                <dl>
                    <dt>
                        @if($v->state == 0 )
                        <img src="/index/img/lock.png" title="仅自己查看" toc="lock">
                        @else
                        <img src="/index/img/unlock.png" title="仅自己查看" toc="lock">
                            @endif
                    </dt>
                    <dd>
                        <h3><a href="/index/simi?id={{$v->id}}">{{$v->title}}</a></h3>
                        <h4>
                             发表时间：{{$v->time}}&nbsp;&nbsp;
                            &nbsp;
                            <span>
				&nbsp;&nbsp;&nbsp;
				<a href="/index/self_diary_del?id={{$v->id}}" onclick="diary_del(&#39;34&#39;);">删除</a>
			  </span>
                        </h4>
                        <p>{{$v->content}}</p>
                    </dd>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>
            </div>
        </div>
            @endforeach
    </div>
    <div class="clear"></div>
    <!--//main_right End-->
    <div style="margin: 30px;"></div>
    <!--//right_kj End-->
</div>
<!--//user_main End-->
<div class="user_footer" style="padding-bottom:30px;">
    红娘客服　　服务热线0953-2287916<br>
    牵手一生婚恋版权所有 © 2010-<span id="footer-copyright-year">2019</span>
</div>
<!--//user_footer End-->
<script type="text/javascript">
    //新信息
    function obj_loading_count(type, tipsid) {
        $.ajax({
            type: "POST",
            url: _ROOT_PATH + "usercp.php?c=popwin&a=count",
            cache: false,
            data: {type:type, r:get_rndnum(8)},
            dataType: "json",
            beforeSend: function(XMLHttpRequest) {
                XMLHttpRequest.setRequestHeader("request_type","ajax");
            },
            success: function(data) {
                var json = eval(data);
                var num = json.num;
                if (num > 0) {
                    var html = "";
                    html = html+"<font style='color:#51545B;'>(";
                    if (num > 99) {
                        html = html+"99";
                    }
                    else {
                        html = html+num;
                    }
                    html = html+")</font>";
                    $("#"+tipsid).html(html);
                }
            },
            error: function() {}
        });
    }
</script>
<style>
    .popwin-box{
        position:fixed;
        bottom:0px;
        right:0px;
        background:url("/tpl/user/images/popwin/popwin_bg.jpg") repeat-x bottom;
        width:100%;
        z-index:999;
    }
    .popwin-main {
        width:330px;
        border:1px solid #f0f0f0;
        margin-bottom:1px;
        bottom: 29px;
        position: absolute;
        z-index: 9;
        background:#ffffff;

    }
    .popwin-titlebar{background:#F0EDEB; padding:8px;height:20px;}
    .popwin-title{ color: #C70067;display: inline;float: left;font-family: Microsoft YaHei,SimHei;font-size: 14px;line-height: 20px;}
    .popwin-min{float:right; width:13px; height:10px; border-top:3px solid #D83473; line-height:20px; cursor:pointer;margin-top:5px;}

    .popwin-menu{
        width:330px;height:30px;
        background:url("/tpl/user/images/popwin/popwin_bg.jpg") repeat-x bottom;
    }
    .popwin-menu li{
        float:left; width:80px; text-align:center;padding:7px 0 0 0;
        border-left:1px solid #ddd; position:relative;
    }
    .popwin-menu li img {vertical-align:middle;padding-bottom:2px;}
    .popwin-menu li:hover{cursor:pointer;}
    .popwin-menu .popwin-tx{
        width: 8px; height: 8px;
        background: url(/tpl/user/images/icon.png) repeat scroll -100px -275px transparent;
        position:absolute; top:9px; left:3px; display:none;
    }
    .popwin-menu span{padding-top:5px;}

    .popwin-content {
        width:310px;padding:10px;background:#ffffff;
    }
    .popwin-content .popwin-nothing{
        padding:20px;line-height:20px;text-align:center;color:#666666;
    }



    .zm_popwin_left {
        float:left;width:50%;height:30px;color:#666666;
        position:fixed;
        bottom:0px;
    }
    .zm_popwin_left ul li {
        float:left;line-height:30px;height:30px;
    }
    .zm_popwin_left ul li img {
        vertical-align:middle;
    }
    .zm_popwin_left .zm_popwin_rightbor {border-right:1px solid #ccc;}

    .zm_popwin_right {
        float:right;width:330px;
    }
</style>
<div class="popwin-box" style="display:none;">

    <div class="zm_popwin_left">
        <ul>
            <li style="padding-left:20px;padding-right:10px;" class="zm_popwin_rightbor"><a href="http://www.wzqsys.com/usercp.php">会员中心</a></li>
            <li style="padding-left:10px;padding-right:10px;" class="zm_popwin_rightbor"><img src="/index/img/popwin_avatar.gif"><a href="http://www.wzqsys.com/usercp.php?c=avatar">设置形象照</a></li>

            <li style="padding-left:10px;padding-right:10px;">
                <a href="http://www.wzqsys.com/usercp.php?c=vip"><img title="VIP服务" src="/index/img/popwin_vip.png"></a>&nbsp;
                <a href="http://www.wzqsys.com/usercp.php?c=certify"><img title="诚信认证" src="/index/img/cid.png"></a>&nbsp;&nbsp;
                <a href="http://www.wzqsys.com/usercp.php?c=cond">修改择友条件</a>
            </li>

        </ul>
        <div style="clear:both;"></div>
    </div>
    <!--//zm_popwin_left End-->

    <div class="zm_popwin_right">

        <div class="popwin-main" style="display:none;" id="popwin-main">
            <div class="popwin-titlebar">
                <span class="popwin-title"></span>
                <div class="popwin-min" title="关闭消息"></div>
                <div class="clear"></div>
            </div>
            <div class="popwin-content" id="popwin-data">

            </div>
        </div>
        <!--/popwin_main End-->

        <input type="hidden" id="click_menu_value" value="">
        <div class="popwin-menu">
            <ul>
                <li onclick="obj_click_menu(&#39;msg&#39;, &#39;2&#39;, &#39;我的信件&#39;);">
                    <div class="popwin-tx block"></div><img src="./11111111111111_files/popwin_letter.gif">信件<span id="popwinmsg"><script>obj_loading_count('msg', 'popwinmsg');</script></span>
                </li>

                <li onclick="obj_click_menu(&#39;hi&#39;, &#39;1&#39;, &#39;我的招呼&#39;);">
                    <div class="popwin-tx block"></div><img src="./11111111111111_files/popwin_hi.gif">招呼<span id="popwinhi"><script>obj_loading_count('hi', 'popwinhi');</script></span>
                </li>

                <li onclick="obj_click_menu(&#39;gift&#39;, &#39;3&#39;, &#39;我的礼物&#39;);">
                    <div class="popwin-tx block"></div><img src="./11111111111111_files/popwin_gift.gif">礼物<span id="popwingift"><script>obj_loading_count('gift', 'popwingift');</script></span>
                </li>
                <li onclick="obj_click_menu(&#39;sysmsg&#39;, &#39;1&#39;, &#39;我的消息&#39;);">
                    <div class="popwin-tx block"></div><img src="./11111111111111_files/popwin_gg.gif">消息<span id="popwinsysmsg"><script>obj_loading_count('sysmsg', 'popwinsysmsg');</script></span>
                </li>
            </ul>
        </div>
        <!--//popwin-menu End-->

    </div>
    <!--//zm_popwin_right End-->
    <div style="clear"></div>



</div>
<script type="text/javascript">
    $(function() {
        $(".popwin-tx").addClass("block");
        //最小化
        $(".popwin-min").click(function() {
            $(".popwin-main").slideUp("slow");
        });
    });

    //扑捉区域
    function obj_click_menu(id, num, title) {
        var _v = $("#click_menu_value").val();
        //同一区域
        if (_v == id) {
            $(".popwin-title").html(title);
            if ($("#popwin-main").css('display') == 'none') {
                $(".popwin-main").slideDown("slow");
                obj_popwin_data(id, num, "popwin-data");
            }
            else {
                $(".popwin-main").slideUp("slow");
            }
        }
        //不同区域
        else {
            if ($("#popwin-main").css('display') == 'block') {
                $(".popwin-main").slideUp("slow");
            }
            $("#click_menu_value").val(id);
            $(".popwin-title").html(title);
            $(".popwin-main").slideDown("slow");
            obj_popwin_data(id, num, "popwin-data");
        }
    }

    //获取数据
    function obj_popwin_data(type, num, tips) {
        $("#"+tips).html("<div style='text-align:center;padding:10px;color:#999999;'>loading</div>");
        $.ajax({
            type: "POST",
            url: _ROOT_PATH + "usercp.php?c=popwin",
            cache: false,
            data: {a:type, num:num, r:get_rndnum(8)},
            dataType: "json",
            beforeSend: function(XMLHttpRequest) {
                XMLHttpRequest.setRequestHeader("request_type","ajax");
            },
            success: function(data) {
                var json = eval(data);
                var result = json.result;
                $("#"+tips).html(result);
            },
            error: function() {}
        });
    }

    //imbox
    function obj_imbox() {
        var tips = "popwin-data";
        $.ajax({
            type: "POST",
            url: _ROOT_PATH + "usercp.php?c=popwin",
            cache: false,
            data: {r:get_rndnum(8)},
            dataType: "json",
            success: function(data) {
                var json = eval(data);
                var response = json.response;
                var result = json.result;
                var type = json.type;
                //存在数据
                if (response == 1) {
                    var title = '';
                    if (type == 'newvisit') {
                        title = '谁访问了我';
                    }
                    $(".popwin-title").html(title);
                    $("#"+tips).html(result);
                    if ($("#popwin-main").css('display') == 'block') {
                        $(".popwin-main").slideUp("slow");
                    }
                    $(".popwin-main").slideDown("slow");
                }
            },
            error: function() {}
        });
    }
</script>

<script type="text/javascript">
    jQuery(".drop").slide({ type:"menu", titCell:".cin", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});
</script>


<script type="text/javascript">
    //基本资料
    function checkbase() {
        var t = "";
        var v = "";

        t = "marrystatus";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择婚姻状况", t);
            return false;
        }

        t = "height";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择身高", t);
            return false;
        }

        //所在地区
        t = "provinceid";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择所在地区", t);
            return false;
        }
        //所在地区
        t = "cityid";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择所在地区", t);
            return false;
        }

        //交友类型
        t = "lovesort";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择交友类别", t);
            return false;
        }

        //月薪
        t = "salary";
        v = $("#"+t).val();
        if(v=="") {
            dmsg("请选择月薪收入", t);
            return false;
        }

        $('#myform').submit();
        return true;
    }

    //内心独白
    function checkmonolog() {
        var t = "";
        var v = "";

        //内心独白
        t = 'content';
        v = $('#'+t).val();
        if (v == '') {
            dmsg("内心独白不能为空", t);
            return false;
        }
        else {
            if (strQuantity(v)<20 || strQuantity(v)>1500) {
                dmsg("内心独白字数必须在20~1500个字之间", t);
                $('#'+t).focus();
                return false;
            }
        }

        $('#myform').submit();
        return true;
    }


</script><div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div><div id="_my97DP" style="position: absolute; top: -1970px; left: -1970px;"><iframe style="width: 186px; height: 198px;" src="/index/img/My97DatePicker.html" frameborder="0" border="0" scrolling="no"></iframe></div></body></html>