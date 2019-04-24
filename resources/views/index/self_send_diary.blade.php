<!DOCTYPE html>
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="OEdev">
    <meta name="generator" content="OElove">
    <title>修改资料-牵手</title>
    <link href="/index/css/css.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript">
        var _ROOT_PATH = "/";
    </script>
    <script type="text/javascript" src="/index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/index/js/jquery.artDialog.source.js"></script>
    <script type="text/javascript" src="/index/js/iframeTools.js"></script>
    <script type="text/javascript" src="/index/js/public.js"></script>
    <script type="text/javascript" src="/index/js/ajax.js"></script>
    <script type="text/javascript" src="/index/js/artbox.js"></script>
    <script type="text/javascript" src="/index/js/WdatePicker.js"></script>
    <script type="text/javascript" src="/index/js/oe_varpop.js"></script>
    <script type="text/javascript" src="/index/js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 7]>
    <script type='text/javascript' src='/tpl/static/js/DD_belatedPNG-min.js'></script>
    <script>
        DD_belatedPNG.fix('.user_logo, .shadow');
    </script>
    <![endif]-->
</head>
<body>
<div class="nav0">
    <div class="oe_top">
        <div class="oe_topcon">
            <div class="left">欢迎来到牵手一生婚恋</div>
            <div class="right drop">
                <div class="login">
                    <a class="a_1" href="login" onclick="artbox_loginbox();" class="alogin"  rel="nofollow">登录</a><a  rel="nofollow" class="a_2" href="/admin" class="areg">注册</a>
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
                        <a href="/show?id={{$datas->id}}"><img src="/uploads/{{$datas->img}}"></a>
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
                    <?php if($datas-> state== 1){ ?>
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
    <div style="margin: 30px;"></div>
</div>
</body></html>