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

        //关注状态
        function obj_listen_status(uid, tipsid) {
            if (uid > 0) {
                $.ajax({
                    type: "POST",
                    url: _ROOT_PATH + "usercp.php?c=listen",
                    cache: false,
                    data: {a:"getlisten", halttype:"ajax", uid:uid, tipsid:tipsid, r:get_rndnum(8)},
                    dataType: "json",
                    success: function(data) {
                        var json = eval(data);
                        var flag = json.flag;
                        if (tipsid != '') {
                            if (flag == '1') {
                                $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-coff\" onclick=\"obj_action_listen('"+uid+"', 'cancel', '"+tipsid+"');\">取消关注</a>");
                            }
                            else {
                                $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-green\" onclick=\"obj_action_listen('"+uid+"', 'listen', '"+tipsid+"');\">+加关注</a>");
                            }
                        }
                    },
                    error: function() {

                    }
                });
            }
        }

        //拉黑状态
        function obj_black_status(uid, tipsid) {
            if (uid > 0) {
                $.ajax({
                    type: "POST",
                    url: _ROOT_PATH + "usercp.php?c=listen",
                    cache: false,
                    data: {a:"getlisten", halttype:"ajax", uid:uid, tipsid:tipsid, r:get_rndnum(8)},
                    dataType: "json",
                    success: function(data) {
                        var json = eval(data);
                        var flag = json.flag;
                        if (tipsid != '') {
                            if (flag == '2') {
                                //已拉黑
                                $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-green\" onclick=\"obj_action_listen('"+uid+"', 'listen', '"+tipsid+"');\">+加关注</a>");
                            }
                            else {
                                //未拉黑
                                $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-coff\" onclick=\"obj_action_listen('"+uid+"', 'black', '"+tipsid+"');\">拉黑名单</a>");
                            }
                        }
                    },
                    error: function() {

                    }
                });
            }
        }

        //操作好友 加关注、拉黑、取消
        function obj_action_listen (uid, action, tipsid) {
            if (uid > 0) {
                $.ajax({
                    type: "POST",
                    url: _ROOT_PATH + "usercp.php?c=listen",
                    cache: false,
                    data: {a:action, halttype:"ajax", fuid:uid, tipsid:tipsid, r:get_rndnum(8)},
                    dataType: "json",
                    success: function(data) {
                        var json = eval(data);
                        var type = json.type;
                        var flag = json.flag;
                        var error = json.error;
                        if (tipsid != '') {
                            //加关注
                            if (type == 'listen') {
                                if (error.length==0) {
                                    if (flag == '1') {
                                        $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-coff\" onclick=\"obj_action_listen('"+uid+"', 'cancel', '"+tipsid+"');\">取消关注</a>");
                                    }
                                }
                                else {
                                    alert(error);
                                }
                            }
                            //取消关注
                            if (type == 'cancel') {
                                if (error.length==0) {
                                    if (flag == '1') {
                                        $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-green\" onclick=\"obj_action_listen('"+uid+"', 'listen', '"+tipsid+"');\">+加关注</a>");
                                    }
                                }
                                else {
                                    alert(error);
                                }
                            }
                            //拉黑名单
                            if (type == 'black') {
                                if (error.length==0) {
                                    if (flag == '1') {
                                        $("#"+tipsid).html("<a href=\"###\" class=\"pcbtn-green\" onclick=\"obj_action_listen('"+uid+"', 'listen', '"+tipsid+"');\">+加关注</a>");
                                    }
                                }
                                else {
                                    alert(error);
                                }
                            }

                        }
                    },
                    error: function() {

                    }
                });
            }
        }

        //发表心情
        function obj_public_mood(content_id) {
            var content = $("#"+content_id).val();
            //心情内容
            if (content == '' || content == '记录每一天的心情...') {
                $.dialog({
                    lock:true,
                    title: '错误提示',
                    content: '请填写心情内容',
                    icon: 'error',
                    button: [
                        {
                            name: '确定'
                        }
                    ]
                });
                return false;
            }
            if (strQuantity(content) > 500) {
                $.dialog({
                    lock:true,
                    title: '错误提示',
                    content: '心情内容不能大于500个字',
                    icon: 'error',
                    button: [
                        {
                            name: '确定'
                        }
                    ]
                });
                return false;
            }

            //发表心情
            $.ajax({
                type: "POST",
                url: _ROOT_PATH + "usercp.php?c=weibo",
                cache: false,
                data: {a:"saveweibo", content:content, r:get_rndnum(8)},
                dataType: "json",
                success: function(data) {
                    var json = eval(data);
                    var response = json.response;
                    var msg = json.msg;
                    if (response == '1') {
                        var tips = "";
                        if (msg.length > 0) {
                            tips = msg;
                        }
                        else {
                            tips = "发表成功";
                        }
                        $.dialog({
                            lock:true,
                            title: '成功提示',
                            content: tips,
                            icon: 'succeed',
                            button: [
                                {
                                    name: '确定',
                                    callback: function () {
                                        window.top.location.reload();
                                    }
                                }
                            ]
                        });
                    }
                    else {
                        var tips = "";
                        if (msg.length > 0) {
                            tips = msg;
                        }
                        else {
                            tips = "发表失败";
                        }
                        $.dialog.tips(tips, 3);
                    }
                },
                error: function() {

                }
            });

        }
        //心情文本框
        function obj_del_wbcontent(content_id) {
            var content = $("#"+content_id).val();
            if (content == '记录每一天的心情...') {
                $("#"+content_id).val("");
            }
        }
        function obj_attr_wbcontent(content_id) {
            var content = $("#"+content_id).val();
            if (content == '') {
                $("#title").val("记录每一天的心情...");
            }
        }
        function obj_cancel_wbcontent(content_id) {
            var content = $("#"+content_id).val();
            if (content != '记录每一天的心情...') {
                $("#"+content_id).val("记录每一天的心情...");
            }
        }
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
                    进行中
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
                    <i class="ico_2"></i><a href="/index/comment">评论管理</a>
                </li>
                <li>
                    <i class="ico_2"></i><a href="/index/active_index">不见不散</a>{{--<button id="peo">活动</button>--}}
                </li>
                <li><i class="ico_7"></i><a href="/index/self_diary">日记</a></li>
                <li><i class="ico_7"></i><a href="/index/niming">匿名小纸条</a></li>
            </ul>
        </div>

        <div class="u_photo">
            <dl>
                <dt>
                    <a href="http://www.wzqsys.com/usercp.php?c=album&amp;a=upload"><span></span></a>
                </dt>
                <div class="clear"></div>
            </dl>
        </div>
    </div>

    <!--//user_main_left End-->

    <div class="main_right">


        <div class="oe_tab_nv">
            <ul>
                <li class="tab_item "><a href="/index/self_diary">我的日记</a></li>
                <li class="tab_item current"><a href="/index/self_send_diary">发表日记</a></li>
            </ul>
        </div>

        <div class="div_smallnav_content_hover">
            <form name="myform" id="myform" action="/index/self_send_diary_sub" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div style="background:#FEFCE7; padding:5px;margin-top:10px;margin-bottom:10px;">
                    阅读权限：
                    <select name="state" id="diaryopen">
                        <option value="1">公开</option>
                        <option value="0">仅自己看</option>
                    </select>
                    &nbsp;&nbsp;&nbsp;
                <div style=" text-align:center;">
                    <input type="text" style="width:90%;font-size:24px; background-color: transparent; border:0px; margin-top:30px; text-align:center;font-family: 微软雅黑; box-shadow: 0px 0px 0px #F0F0F0;" name="title" id="title" value="请在这里输入日记标题" onclick="del_title();" onblur="attr_title();">
                    <div style="margin:20px 10px 10px 10px; padding-top:20px; border-top:1px dashed Gray;">
                        <textarea rows="1" tabindex="1" style="width:100%; height:500px; font-size:13px; background-color: transparent; border:0px; margin-top:20px; font-family: 微软雅黑; line-height:25px; overflow:auto;" name="content" id="content" onclick="del_content();" onblur="attr_content();">请在这里写日记...</textarea>
                    </div>
                </div>
                <div style="margin-top:10px;">
                    <input type="submit" name="btn_save" id="btn_save" value="发表日记" class="button-red">&nbsp;&nbsp;
                    <input type="button" name="btn_return" id="btn_return" value="返回列表" onclick="javascript:window.location.href=&#39;/index/self_diary&#39;;" class="button-coff">
                </div>
                <div class="clear"> </div>
            </form>
        </div>


    </div>


    <div class="clear"></div>
    <!--//main_right End-->

    <div style="margin: 30px;"></div>
    <!--//right_kj End-->

</div>
<!--//user_main End-->


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