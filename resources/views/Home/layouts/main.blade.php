<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>会员登录-牵手一生婚恋</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="OEdev" />
    <meta name="generator" content="OElove" />
    <link href="/index/css/oe_varpop.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../css/jdlogin.css" />
    <link rel="stylesheet" href="../../../../css/style.css" />
    <link href="../../../../css/oe_varpop.css" rel="stylesheet" />
    <link href="../../../../css/sharebar.css" rel="stylesheet" type="text/css" />
    <script type='text/javascript'>
        var _ROOT_PATH = "";
    </script>
    <script type='text/javascript' src='../../../../js/jquery.min.js'></script>
    <script type='text/javascript' src='../../../../js/public.js'></script>
    <script type="text/javascript" src='../../../../js/artdialog/jquery.artDialog.source.js?skin=default'></script>
    <script type="text/javascript" src='../../../../js/artdialog/plugins/iframeTools.js'></script>
    <script type='text/javascript' src='../../../../js/artbox.js'></script>
    <script type='text/javascript' src='../../../../js/ajax.js'></script>
    <script type='text/javascript' src='../../../../js/ajax.extend.js'></script>
    <script type="text/javascript" src='../../../../js/WdatePicker.js'></script>
    <script type="text/javascript" src="../../../../js/jquery.slide.js"></script>
    <script type="text/javascript" src="../../../../js/jquery.slideui.js"></script>
    <script type="text/javascript" src="../../../../js/oe_varpop.js"></script>
    <script type="text/javascript" src="../../../../js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="../../../../js/search.js"></script>
    <script src="../../../../js/sharebar.js"></script>
    <script type="text/javascript">
        var share_site_url = "";
        var share_site_name = "牵手一生婚恋";
    </script>
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
                url: 'content_sub',
                data: {a:"saveweibo", content:content, r:get_rndnum(8)},
                success: function(data) {
                    alert(data);
                    window.location.href='.'
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
                    <li><a href=".">首页</a></li>
                    <li><a href="riji">日记</a></li>
                    <li><a href="/index/self">个人中心</a></li>
                    <li><a href="case">幸福案例</a></li>
                    <li><a href="active">不见不散</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div style="height:140px;"></div>

@yield('content')

<div class="oe_link">
</div>
<div class="oe_footer">
    <div class="oe_footercon">
        <div class="center" style="text-align: center">
            <h3>会员服务</h3>
            红娘客服　　服务热线0953-2287916<br />
            牵手一生婚恋版权所有 &copy; 2010-<span id="footer-copyright-year">2019</span>
            &nbsp;&nbsp;鄂ICP备10217863号
            Powered by <a href='http://www.phpcoo.com/' target='_blank'>OElove</a>
            <div align='center'><p style='font-size:10px; font-family:Arial, Helvetica, sans-serif; line-height:120%;color:#999999'>Processed in 0.293204 second(s) , 78 queries</p></div>    </div>
        <div class="clear"></div>
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
<script type='text/javascript' src='source/plugin/online/js/online.js'></script>

</body>
</html>
