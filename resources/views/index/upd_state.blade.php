<!DOCTYPE html>

<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="author" content="OEdev">
    <meta name="generator" content="OElove">
    <title>修改资料-牵手</title>
    <link href="/index/css/oe_varpop.css" rel="stylesheet">
    <link href="/index/css/css.css" rel="stylesheet">
    <script type="text/javascript">
        var _ROOT_PATH = "/";
    </script>
    <link rel="stylesheet" href="/index/css/default.css">
    <link rel="stylesheet" href="../../../../css/jdlogin.css" />
    <link rel="stylesheet" href="../../../../css/style.css" />
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
</head>
<body><div class="" style="display: none; position: absolute;"><div class="aui_outer"><table class="aui_border"><tbody><tr><td class="aui_w"></td><td class="aui_c"><div class="aui_inner"><table class="aui_dialog"><tbody><tr><td colspan="2" class="aui_header"><div class="aui_titleBar"><div class="aui_title" style="cursor: move;"></div><a class="aui_close" href="http://www.wzqsys.com/usercp.php?c=profile###">×</a></div></td></tr><tr><td class="aui_icon" style="display: none;"><div class="aui_iconBg" style="background: none;"></div></td><td class="aui_main" style="width: auto; height: auto;"><div class="aui_content" style="padding: 20px 25px;"></div></td></tr><tr><td colspan="2" class="aui_footer"><div class="aui_buttons" style="display: none;"></div></td></tr></tbody></table></div></td><td class="aui_e"></td></tr><tr style="display:none;"><td class="aui_sw"></td><td class="aui_s"></td><td class="aui_se" style="cursor: se-resize;"></td></tr></tbody></table></div></div>

<div style="width:100%;height:75px;"></div>
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
                        <a href="/show?id={{$data->id}}"><img src="/uploads/{{$data->img}}" title="设置头像"></a>
                    </dt>
                    <dd>
                        <h2><img src="/index/img/f2fde8e7d8aa2a10.gif" border="0" class="">{{$data->nichen}}</h2>
                        <h3><a href="/index/self" target="_blank">查看我的主页</a></h3>
                    </dd>
                    <div class="clear"></div>
                </dl>
                <div class="clear"></div>

            </div>
            <div class="oe_uL_rz">
                <div class="oe_uL_rz_name">
                    征友状态：
                    <?php if($data->state == 1){ ?>
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
                    <li class="tab_item "><a href="/index/self">基本资料</a></li>
                    <li class="tab_item"><a href="/index/self_content">内心独白</a></li>
                    <li class="tab_item"><a href="/index/upd_pass">修改密码</a></li>
                    <li class="tab_item current"><a href="/index/upd_state">更改状态</a></li>
                </ul>
            </div>
            <div class="div_smallnav_content_hover" style="height: 472px;">



                <form name="myform" action="/index/upd_state_sub" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="user-table table-margin lh35">
                        <tbody><tr>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <td colspan="2" style="padding-bottom:10px;"><div class="item_title" style="width:100%"><p>设置交友状态</p><span class="shadow"></span></div></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>如果征友状态关闭，别人再也无法看到您的资料和照片；</b><br>
                                征友状态关闭之后，不需要再做任何其它操作。
                            </td>
                        </tr>
                        <tr>
                            <td class="lblock" width="10%"></td>
                            <td class="rblock" width="90%">征友进行中 <input type="radio" name="state" value="1" checked=""> <span id="dlovestatus" class="f_red"></span></td>
                        </tr>
                        <tr>
                            <td class="lblock"></td>
                            <td class="rblock">关闭征友 <input type="radio" name="state" value="0"> <span id="dlovestatus" class="f_red"></span></td>
                        </tr>
                        <!-- 提交保存 -->
                        <tr>
                            <td class="lblock"></td>
                            <td class="rblock"><input type="submit" name="btn_save" value="保 存" class="button-red"></td>
                        </tr>
                        </tbody></table>
                </form>


            </div>
            <!--//div_smallnav_content_hover End-->

        </div>
            <div class="clear"></div>
            <!--//div_smallnav_content_hover End-->
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
                if (strQuantity(v)<6 || strQuantity(v)>20) {
                    dmsg("内心独白字数必须在6~20个字之间", t);
                    $('#'+t).focus();
                    return false;
                }
            }

            $('#myform').submit();
            return true;
        }


    </script><div style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background: rgb(255, 255, 255);"></div><div id="_my97DP" style="position: absolute; top: -1970px; left: -1970px;"><iframe style="width: 186px; height: 198px;" src="/index/img/My97DatePicker.html" frameborder="0" border="0" scrolling="no"></iframe></div></body></html>