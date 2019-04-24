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
                    <li class="tab_item "><a href="/index/self">基本资料</a></li>
                    <li class="tab_item"><a href="/index/self_content">内心独白</a></li>
                    <li class="tab_item current" current><a href="/index/upd_pass">修改密码</a></li>
                    <li class="tab_item"><a href="/index/upd_state">更改状态</a></li>
                </ul>
            </div>
            <div class="div_smallnav_content_hover" style="height: 472px;">
                <form name="myform" id="myform" action="upd_pass_sub" method="post">
                    <table cellpadding="0" cellspacing="0" border="0" width="98%" class="user-table table-margin lh35">
                        <tbody><tr>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <td colspan="2" style="padding-bottom:10px;"><div class="item_title" style="width:100%"><p>修改密码</p><span class="shadow"></span></div></td>
                        </tr>
                        <!-- 旧密码 -->
                        <tr>
                            <td class="lblock" width="20%">旧 密 码 <span class="f_red">*</span></td>
                            <td class="rblock"><input type="password" name="oldpass" id="oldpassword" class="input-150" maxlength="16"> <span id="doldpassword" class="f_red"></span></td>
                        </tr>
                        <!-- 新密码 -->
                        <tr>
                            <td class="lblock">新 密 码 <span class="f_red">*</span></td>
                            <td class="rblock"><input type="password" name="newpass" id="newpassword" class="input-150" maxlength="16"> <span id="dnewpassword" class="f_red"></span> (至少6个字符)</td>
                        </tr>
                        <!-- 确认新密码 -->
                        <tr>
                            <td class="lblock">再次输入 <span class="f_red">*</span></td>
                            <td class="rblock"><input type="password" name="confirmpass" id="confirmpassword" class="input-150" maxlength="16"> <span id="dconfirmpassword" class="f_red"></span></td>
                        </tr>
                        <!-- 提交保存 -->
                        <tr>
                            <td class="lblock"></td>
                            <td class="rblock"><input type="submit" name="btn_save" class="button-red" value="修 改" onclick="return checkform();"></td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>
        <div class="clear"></div>
        <div style="margin: 30px;"></div>
    </div>
    <div class="user_footer" style="padding-bottom:30px;">
        红娘客服　　服务热线0953-2287916<br>
        牵手一生婚恋版权所有 © 2010-<span id="footer-copyright-year">2019</span>
    </div>
</body></html>