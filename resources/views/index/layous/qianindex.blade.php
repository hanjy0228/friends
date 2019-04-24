<!DOCTYPE html>
<!-- saved from url=(0042)http://www.wzqsys.com/usercp.php?c=profile -->
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
    <script type="text/javascript">
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
                url: '/index/content_sub',
                data: {a:"saveweibo", content:content, r:get_rndnum(8)},
                success: function(data) {
                    alert(data);
                    window.location.href='/index/comment'
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
<body>
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
<div class="user_main" style="margin-top: -60px;">
    <div class="oe_bn"><span></span>会员中心 &gt;&gt; 我的资料</div>
    <div class="user_main_left">
        <div class="oe_index_uL_top">
            <div class="oe_index_uL_head">
                <dl>
                    <dt>
                            <img src="/uploads/{{$data->img}}" title="设置头像"></a>
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
                    <?php if($data-> state == 1){ ?>
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

@yield('content')

    <div class="user_footer" style="padding-bottom:30px;">
    </div>
    </div>
</body>
</html>


