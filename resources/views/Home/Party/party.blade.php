@extends('Home.layouts.main')

@section('content')
<div class="oe_party_list">
    <div class="left">
        <div class="hd">
            <ul>

                <li  class="current">
                    <a href="index.php?c=party&s_catid=0&s_area1=0&s_area2=0&s_orderby=0">全部</a>
                </li>
                <li >
                    <a href="index.php?c=party&s_catid=1&s_area1=0&s_area2=0&s_orderby=0">免费活动</a>
                </li>
                <li >
                    <a href="index.php?c=party&s_catid=2&s_area1=0&s_area2=0&s_orderby=0">相亲</a>
                </li>
            </ul>

            <div class="oe_psearch">
                <form id="party_form" action="index.php" method="get">
                    <input type="hidden" id="c" name="c" value="party" >
                    <input type="hidden" id="s_catid" name="s_catid" value="0" >
                    <select name='s_area1' id='s_area1' onchange="fetch_city('s_area1', 's_area2', '0', '请选择', '0', '', '0');"><option value=''>请选择</option><option value='1'>北京</option><option value='3'>天津</option><option value='5'>上海</option><option value='7'>重庆</option><option value='9'>广东</option><option value='33'>江苏</option><option value='57'>浙江</option><option value='85'>福建</option><option value='98'>湖南</option><option value='122'>湖北</option><option value='152'>山东</option><option value='177'>辽宁</option><option value='198'>吉林</option><option value='218'>云南</option><option value='233'>四川</option><option value='252'>安徽</option><option value='271'>江西</option><option value='286'>黑龙江</option><option value='306'>河北</option><option value='326'>陕西</option><option value='336'>海南</option><option value='342'>河南</option><option value='362'>山西</option><option value='374'>内蒙古</option><option value='392'>广西</option><option value='405'>贵州</option><option value='416'>宁夏</option><option value='421'>青海</option><option value='427'>新疆</option><option value='445'>西藏</option><option value='449'>甘肃</option><option value='463'>台湾</option><option value='469'>香港</option><option value='471'>澳门</option><option value='473'>国外</option><option value='475'>其他</option></select>
                    <span id='s_area1' class='f_red'></span>
                    <span id="json_s_area2">
                            <select name="s_area2" id="s_area2"><option value="">请选择</option></select>
                          </span>
                    排序：
                    <select name="s_orderby" id="s_orderby">
                        <option value="">--</option>
                        <option value="1" >最新报名</option>
                        <option value="2" >最新发布</option>
                    </select>
                </form>
            </div>
        </div>
        <div class="bd">
            <dl>
                <dt>
                    <h3>
                        <a href="party/3.html">名流时尚派对：形象改造+单身交友，我换个造型爱上你</a>
                    </h3>
                    <div class="img">
                        <a href="party/3.html" class="head"><img src="../../../../img/index/1cee5244de2b7019.jpg" /></a>
                        <p>
                            活动时间：2018-06-15 12:00 至 2018-06-15 15:00 <label>已报名0人</label>
                        </p>

                        <span class="ico"> </span>
                    </div>
                </dt>
                <dd>
                    <p class="p_1"> 名流时尚派对：形象改造+单身交友，我换个造型爱上你
                        单身的你是不是常常也有这种困惑：    明明剩男剩女一年比一年多    可自己就是找不到对象。        工作忙？圈子小？    还是懒得找……    都不是致命原因！    真正阻碍你找到另一半的重要原因，那就是——第一印象
                        在这个看脸的世界</p>
                    <p class="btn">
                        截止报名：2019-05-07    <label><i></i>广州市天河区</label>
                        <a href="party/3.html">我要报名</a>
                    </p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <h3>
                        <span></span>              <a href="party/2.html">11.11光棍节，您找到您的另一半了吗？</a>
                    </h3>
                    <div class="img">
                        <a href="party/2.html" class="head"><img src="data/attachment/party/201712/07/134de700021fbda8.png" /></a>
                        <p>
                            活动时间：2017-11-11 15:00 至 2017-11-11 17:00 <label>已报名0人</label>
                        </p>
                        <span class="ico current"> </span>
                    </div>
                </dt>
                <dd>
                    <p class="p_1">

                        11.11光棍节，您找到您的另一半了吗？
                        创世纪情缘婚恋中心、情订大台北、“Lasvis”欢乐西餐厅
                        给单身的您找寻另一“半”的机会!
                        比暖气还要强烈的“全城“脱光”就等您来”大型相亲交友活动强势来袭......
                        甜蜜的11月，我们要大声说出爱，让我们一起见证你们的爱情。
                        凡报名参加活动就可得到价值200</p>
                    <p class="btn">
                        截止报名：2017-12-07    <label><i></i>凯德世家“Lasvis”欢乐西餐厅</label>

                        <a href="party/2.html" class="current">查看详情</a>
                    </p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <h3>
                        <a href="party/1.html">【2018年12月01日】“遇见你，遇见爱”天河公园相亲活动</a>
                    </h3>
                    <div class="img">
                        <a href="party/1.html" class="head"><img src="data/attachment/party/201712/07/167b00aa86c79b06.jpg" /></a>
                        <p>
                            活动时间：2018-12-01 10:00 至 2018-12-01 12:00 <label>已报名1人</label>
                        </p>
                        <span class="ico current"> </span>
                    </div>
                </dt>
                <dd>
                    <p class="p_1">【活动主题】   【2017年5月20日】“边走边爱”天河公园免费相亲活动 啊啊【活动简介】主办单位：OElove交友网站官方网站：http://e.oephp.com   活动地点：广州市天河区天河公园广场   活动时间：2017年05月20号 13：00~17：00  报名时间：2017年04月20日~2017年05月19号   </p>
                    <p class="btn">
                        截止报名：2018-11-10    <label><i></i></label>

                        <a href="party/1.html" class="current">查看详情</a>
                    </p>
                </dd>
            </dl>

        </div>
    </div>
    <div class="right">
        <div class="oe_newbm">
            <div class="hd">最新报名</div>
            <div class="bd">
                <div class="line"></div>
            </div>
        </div>
        <div class="oe_partyhelp">
            <div class="hd">活动帮助</div>
            <div class="bd">
                <dl>
                    <dt>1</dt>
                    <dd>
                        <h3>报名活动</h3>
                        <p>找到感兴趣的活动，提交报名信息；</p>
                    </dd>
                </dl>
                <dl>
                    <dt>2</dt>
                    <dd>
                        <h3>支付费用</h3>
                        <p>在线支付活动费用，也可以参加活动时现场支付；</p>
                    </dd>
                </dl>
                <dl>
                    <dt>3</dt>
                    <dd>
                        <h3>准时参加活动</h3>
                        <p>现场签到，参加相亲活动；</p>
                    </dd>
                </dl>
                <dl>
                    <dt>4</dt>
                    <dd>
                        <h3>活动结束</h3>
                        <p>有心仪的对象，进一步交往。</p>
                    </dd>
                </dl>
            </div>
        </div>

        <div class="oe_contact">
            <div class="hd">联系我们</div>
            <div class="bd">
                <dl>
                    <dt><span><i class="ico_1"></i>电话：</span></dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt><span><i class="ico_2"></i>邮箱：</span></dt>
                    <dd></dd>
                </dl>
                <dl>
                    <dt><span><i class="ico_3"></i>地址：</span></dt>
                    <dd>
                        请在后台添加自定义HTML标签：address
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<script>
    function jumpArea() {
        $s_area1 = $("#s_area1").val();
        $s_area1 = parseInt($s_area1);
        $s_area2 = $("#s_area2").val();
        if (typeof($s_area2) == "undefined") {
            $s_area2 = 0;
        }
        else {
            $s_area2 = parseInt($s_area2);
        }
        if ($s_area2 > 0) {
            $("#party_form").submit();
        }
    }
    $(function(){
        //地区
        $(document).on("change", "#s_area2", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
        //排序
        $(document).on("change", "#s_orderby", function(){
            $_val = $(this).find("option:selected").val();
            if ($_val.length > 0) {
                $("#party_form").submit();
            }
        });
    });
    </script>
@stop
