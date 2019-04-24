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
        <div class="main_right" style="height: 472px;">
            <div class="oe_tab_nv">
                <ul>
                    <li class="tab_item current"><a href="comment">返回</a></li>
                </ul>
            </div>
            <div class="div_smallnav_content_hover">
                <table class="table">
                    <tbody>
                        @foreach($data as $k => $v)
                            <p>评论人:<a href="/show?id={{$v->p_id}}" >{{$v->nichen}}</a></p>
                            <br>
                            <br>
                            <br>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$v->content}}</p>
                            <br>
                            <br>
                            <br>
                            <p style="float: right">时间{{$v->time}}</p>
                        @endforeach
                    </tbody></table>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div style="margin: 30px;"></div>
    </div>
    <div class="user_footer" style="padding-bottom:30px;">
        红娘客服　　服务热线0953-2287916<br>
        牵手一生婚恋版权所有 © 2010-<span id="footer-copyright-year">2019</span>
    </div>
</body>
</html>