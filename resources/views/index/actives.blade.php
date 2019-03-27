<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://www.wzqsys.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>交友首页-牵手一生婚恋</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="OEdev">
    <meta name="generator" content="OElove">
    <link rel="stylesheet" href="/css/jdlogin.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="/css/oe_varpop.css" rel="stylesheet">
    <script type="text/javascript">
        var _ROOT_PATH = "/";
    </script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/public.js"></script>
    <link rel="stylesheet" href="/css/default.css"><script type="text/javascript" src="/index/js/jquery.artDialog.source.js"></script>
    <script type="text/javascript" src="/js/iframeTools.js"></script>
    <script type="text/javascript" src="/js/artbox.js"></script>
    <script type="text/javascript" src="/js/ajax.js"></script>
    <script type="text/javascript" src="/js/ajax.extend.js"></script>
    <script type="text/javascript" src="/js/WdatePicker.js"></script>
    <link href="/css/WdatePicker.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/jquery.slide.js"></script>
    <script type="text/javascript" src="/js/jquery.slideui.js"></script>
    <script type="text/javascript" src="/js/oe_varpop.js"></script>
    <script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/js/search.js"></script>

    <link href="/css/sharebar.css" rel="stylesheet" type="text/css">
    <script src="/js/sharebar.js"></script>
    <script type="text/javascript">
        var share_site_url = "http://www.wzqsys.com/";
        var share_site_name = "牵手一生婚恋";
    </script>
</head>
<body>
<style type="text/css">
    body{background:#fff;}
</style>
<div style="height:140px;"></div>

<div class="oe_story">
    <div class="top"></div>
    <div class="oe_storycon">
        <div class="hd">
            不见不散
            <span></span>
            <img src="/img/p_6.png">

        </div>
        <div class="bd">
            @foreach($data as $k => $v)
            <dl class="dl_1 nLi on">
                <dt><a href=""><img src="/uploads/{{$v->img}}"></a></dt>
                <dd class="sub">
                    <p class="p_1"></p>
                    <div>
                        <h3><a href="" target="_blank">{{$v->nichen}}</a></h3>
                        <p>年龄：{{$v->age}}</p>
                        <p class="p_2">
                            <a href="/index/chos?id={{$v->id}}" target="_blank" rel="nofollow">选择缘分</a>
                            <a href="/index/secoty?id={{$v->id}}" target="_blank" rel="nofollow">匿名小纸条</a>
                        </p>
                    </div>
                </dd>
            </dl>
            @endforeach
            <div class="clear"></div>
        </div>
    </div>
    <div class="bottom"></div>
</div>
<script type="text/javascript">
    jQuery(".oe_story").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
</script>

<div class="oe_link">
    <div class="oe_linkcon">
        <b>友情链接：</b>
        <a href="http://www.phpcoo.com/" target="_blank">OElove官方网</a> | <a href="http://bbs.phpcoo.com/" target="_blank">OElove技术论坛</a>
    </div>
</div>
<div class="oe_footer">
    <div class="oe_footercon">
        <div class="er">
            <h3>微信扫一扫</h3>
            <img src="/css/index.php">
        </div>
        <div class="fast">
            <h3>快速链接</h3>
            <ul>
                <li><a rel="nofollow" href="http://www.wzqsys.com/about/1.html">网站介绍</a></li>
                <li><a rel="nofollow" href="http://www.wzqsys.com/about/4.html">联系我们</a></li>
                <li><a rel="nofollow" href="http://www.wzqsys.com/about/5.html">免责申明</a></li>
                <li><a rel="nofollow" href="http://www.wzqsys.com/about/6.html">交友须知</a></li>
                <li><a rel="nofollow" href="http://www.wzqsys.com/about/7.html">隐私保护</a></li>
                <li><a href="http://www.wzqsys.com/index.php?c=blackuser">黑名单</a></li>
                <li><a rel="nofollow" href="javascript:;" f="but_safety_addto" style="cursor:pointer;" onclick="artbox_complaint(&#39;0&#39;);"><i></i>投诉/举报</a></li>
                <li><a rel="nofollow" href="http://www.wzqsys.com/index.php">返回首页</a></li>
            </ul>
        </div>

    </div>
</div>


<style type="text/css">
    #floatDivr{ display:none;z-index:100;}
    #floatDiv{ display:none;z-index:100;}
    .floatonline_1{ padding:1px; width:130px; text-align:left;}
    .scroll_title_2{height:25px; line-height:25px; background:url(/source/plugin/online/images/qq/online4_1.gif) no-repeat 0px 0px; position:relative;}
    .scroll_title_2 span{ padding-left:15px; font-weight:bold; color:#FFFFFF;}
    .scroll_title_2 a{ display:block; position:absolute; right:8px; top:6px; line-height:15px;  width:11px; height:11px; background:url(/source/plugin/online/images/qq/close2_1.gif) no-repeat 0px 0px;}
    .scroll_main2{ padding:4px; background:#c5e2f8; border:1px solid #498bcf;}
    .scroll_text2{ background:#FFFFFF; border:1px solid #a7d8d7; padding:3px;}
    .scroll_qq_1{padding:2px 2px 0px 2px; text-align:left; font-weight:bold; color:#333333; }
    .scroll_qq_1 img{padding:5px 0px 0px 0px;}
    .scroll_skype_1{padding:5px 0px 5px 0px; text-align:center;}
    .scroll_alibaba_1{padding:5px 0px 5px 0px; text-align:center;}
    .scroll_foot_2{ background:#FFFFFF; border:1px solid #a7d8d7; text-align:center; padding:3px; line-height:18px; margin-top:5px;}}
</style>

<script type="text/javascript" src="/index/js/online.js"></script>
<div id="floatDivr" style="position: absolute;" class="floatonline_1">


    <div class="scroll_title_2"><span>在线咨询</span><a href="http://www.wzqsys.com/#" title="关闭" onmousedown="Mouseclose()">&nbsp;</a></div>
    <div class="scroll_main2">
        <div class="scroll_text2">


    </div>
</div><script language="javascript" type="text/javascript">
    function Mouseclose(){
        document.getElementById('floatDivr').style.display='none';
    }
    window.onload = function(){
        var floatObjr = document.getElementById('floatDivr');
        Floaters.addItem(floatObjr, screen.width-158, 110);
        Floaters.sPlay();
        document.getElementById('floatDivr').style.display='block';
    }
</script>
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
                    <div class="popwin-tx block"></div><img src="./交友首页-牵手一生婚恋_files/popwin_letter.gif">信件<span id="popwinmsg"><script>obj_loading_count('msg', 'popwinmsg');</script></span>
                </li>

                <li onclick="obj_click_menu(&#39;hi&#39;, &#39;1&#39;, &#39;我的招呼&#39;);">
                    <div class="popwin-tx block"></div><img src="./交友首页-牵手一生婚恋_files/popwin_hi.gif">招呼<span id="popwinhi"><script>obj_loading_count('hi', 'popwinhi');</script></span>
                </li>

                <li onclick="obj_click_menu(&#39;gift&#39;, &#39;3&#39;, &#39;我的礼物&#39;);">
                    <div class="popwin-tx block"></div><img src="./交友首页-牵手一生婚恋_files/popwin_gift.gif">礼物<span id="popwingift"><script>obj_loading_count('gift', 'popwingift');</script></span>
                </li>
                <li onclick="obj_click_menu(&#39;sysmsg&#39;, &#39;1&#39;, &#39;我的消息&#39;);">
                    <div class="popwin-tx block"></div><img src="./交友首页-牵手一生婚恋_files/popwin_gg.gif">消息<span id="popwinsysmsg"><script>obj_loading_count('sysmsg', 'popwinsysmsg');</script></span>
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
    //WAP提醒
    $(function(){
        var x = 10;
        var y = 20;
        $("a.waptips").mouseover(function(e){
            this.myTitle = this.title;
            this.title = "";
            var tooltip = "<div id='waptips'>"+ this.myTitle +"<\/div>"; //创建 div 元素
            $("body").append(tooltip);    //把它追加到文档中
            $("#waptips")
                .css({
                    "top": (e.pageY+y) + "px",
                    "left": (e.pageX+x)  + "px"
                }).show("fast");      //设置x坐标和y坐标，并且显示
        }).mouseout(function(){
            this.title = this.myTitle;
            $("#waptips").remove();   //移除
        }).mousemove(function(e){
            $("#waptips")
                .css({
                    "top": (e.pageY+y) + "px",
                    "left": (e.pageX+x)  + "px"
                });
        });
    })

    jQuery(".drop").slide({ type:"menu", titCell:".cin", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});

</script>

<div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div></body></html>