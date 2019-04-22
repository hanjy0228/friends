@extends('Home.layouts.main')

@section('content')
<style type="text/css">
    body{background:#EDEFF5;}
</style>
<div class="ce_reg">
    <div class="left">
        <div class="reg_left_title">
            <h1>30秒免费注册， 开启您的择友之旅~</h1>
        </div>
        <form method="post" action="admin"/>
        {{ csrf_field() }}
        <div class="form_box">
            <div class='reg_tips_center'>账号信息 带*号必填</div>
            <div class="form_li">
                <label><font color="red">*</font> 用户名：</label>
                <input type="user"  style="border:1px solid #e0e0e0;width:250px;height:30px;" name="user"/>
            </div>
            <div id="div_email" class="form_li">
                <label><font color="red">*</font> 昵&#12288;&#12288;称：</label>
                <input type="text" name="nichen" id="username" class="w1" maxlength="16" onblur="ajax_user('username','tip_username');" />  <span id="tip_username"></span>
                <br /><font color="#999999">长度3-16个字符，1个汉字=2个字符
                    <br />格式由26个字母，数字，汉字，下横线，中横线组成。</font>
            </div>
            <div class="form_li">
                <label><font color="red">*</font> 登录密码：</label>
                <input type="password" name="pass" id="password" class="w1" /> <font color="#999999">长度6-16个字符</font>
            </div>
            <div class="form_li">
                <label><font color="red">*</font> 确认密码：</label>
                <input type="password" name="pass1" id="confirmpassword" class="w1" /> <font color="#999999"> 输入以上密码</font>
            </div>
            <div class="form_li">
                <label><font color="red">*</font> 登录邮箱：</label>
                <input type="text" name="email" id="email" class="w1" onblur="ajax_email('email','tip_email');" /> <font color="red">*</font> <span id="tip_email"><font color="#999999"> 请输入有效邮箱地址</font></span>
            </div>
            <div class='reg_tips_center'>基本信息 带*号必填</div>
            <div class="bitian">
                <div id="div_gender" class="form_li">
                    <label><font color="red">*</font>  您的性别：</label>
                    <input type='radio' name='sex' id='gender' value='1' checked />男， <input type='radio' name='sex' id='gender' value='2' />女 <span id='dgender' class='f_red'></span> <font color='#999999'>(一旦选择不能修改)</font>
                </div>
                <div id="div_birthday" class="form_li">
                    <label><font color="red">*</font> 年龄：</label>
                    <input type="text" id="age"  name="age"/>
                </div>
                <div id="div_hu" class="form_li">
                    <label><font color="red">*</font>户籍 ：</label>
                    <select name="hu" id="hu" onchange="fetch_hometown(&#39;nationprovinceid&#39;, &#39;nationcityid&#39;, &#39;0&#39;, &#39;=请选择=&#39;);">
                        <option value="">=请选择=</option>
                        <option value="宁夏">宁夏</option>
                        <option value="北京">北京</option>
                        <option value="天津">天津</option>
                        <option value="上海">上海</option>
                        <option value="重庆">重庆</option>
                        <option value="广东">广东</option>
                        <option value="江苏">江苏</option>
                        <option value="浙江">浙江</option>
                        <option value="福建">福建</option>
                        <option value="湖南">湖南</option>
                        <option value="湖北">湖北</option>
                        <option value="山东">山东</option>
                        <option value="辽宁">辽宁</option>
                        <option value="吉林">吉林</option>
                        <option value="云南">云南</option>
                        <option value="四川">四川</option>
                        <option value="安徽">安徽</option>
                        <option value="江西">江西</option>
                        <option value="黑龙江">黑龙江</option>
                        <option value="河北">河北</option>
                        <option value="陕西">陕西</option>
                        <option value="海南">海南</option>
                        <option value="河南">河南</option>
                        <option value="山西">山西</option>
                        <option value="内蒙古">内蒙古</option>
                        <option value="广西">广西</option>
                        <option value="贵州">贵州</option>
                        <option value="421">青海</option>
                        <option value="新疆">新疆</option>
                        <option value="西藏">西藏</option>
                        <option value="甘肃">甘肃</option>
                        <option value="台湾">台湾</option>
                        <option value="香港">香港</option>
                        <option value="澳门">澳门</option>
                        <option value="国外">国外</option>
                    </select>&nbsp;<span id="dnationprovinceid" class="f_red">
                </div>

                <div id="div_study" class="form_li">
                    <label><font color="red">*</font> 学历：</label>
                    <select name="study " id="study">
                        <option value="">=请选择=</option>
                        <option value="1">本科</option>
                        <option value="2">硕士</option>
                        <option value="3">博士</option>
                    </select>
                </div>
                <div id="div_birthday" class="form_li">
                    <label><font color="red">*</font> 婚姻状况：</label>
                    <select name="maraystate" id="maraystate">
                        <option value="">=请选择=</option>
                        <option value="1" >未婚</option>
                        <option value="2">离异</option>
                    </select>
                </div>
                <div id="div_height" class="form_li">
                    <label><font color="red">*</font> 身高：</label>
                    <input type="text" id="height" name="height" style="width: 50px;"> cm
                </div>
                <div id="div_need" class="form_li">
                    <label><font color="red">*</font> 择偶需求：</label>
                    <input type="textarea" id="need"name="need" style="border:1px solid #e0e0e0;width:250px;height:30px;"/>
                </div>
                <div id="div_intor" class="form_li">
                    <label><font color="red">*</font> 自我评价：</label>
                    <input type="textarea"id="intor" name="intor" style="border:1px solid #e0e0e0;width:250px;height:30px;"/>
                </div>
                <div id="div_intor" class="form_li">
                    <label><font color="red">*</font> 内心独白：</label>
                    <input type="textarea"id="produce" name="intor" style="border:1px solid #e0e0e0;width:250px;height:30px;"/>
                </div>
                <div id="div_profession" class="form_li">
                    <label><font color="red">*</font> 职业：</label>
                    <select name="profession" id="jobs">
                        <option value="">=请选择=</option>
                        <option value="在校学生">在校学生</option>
                        <option value="计算机/互联网/IT">计算机/互联网/IT</option>
                        <option value="电子/半导体/仪表仪器">电子/半导体/仪表仪器</option>
                        <option value="通信技术">通信技术</option>
                        <option value="销售">销售</option>
                        <option value="市场拓展">市场拓展</option>
                        <option value="公关/商务">公关/商务</option>
                        <option value="采购/贸易">采购/贸易</option>
                        <option value="客户服务/技术支持">客户服务/技术支持</option>
                        <option value="人力资源/行政管理">人力资源/行政管理</option>
                        <option value="高级管理">高级管理</option>
                        <option value="生产/加工/制造">生产/加工/制造</option>
                        <option value="质控/安检">质控/安检</option>
                        <option value="工程机械">工程机械</option>
                        <option value="技工">技工</option>
                        <option value="会计/审计/统计">会计/审计/统计</option>
                        <option value="金融/证券/投资">金融/证券/投资</option>
                        <option value="房地产/装修/物业">房地产/装修/物业</option>
                        <option value="仓储/物流">仓储/物流</option>
                        <option value="交通/运输">交通/运输</option>
                        <option value="普通劳动力/家政服务">普通劳动力/家政服务</option>
                        <option value="普通服务行业">普通服务行业</option>
                        <option value="航空服务行业">航空服务行业</option>
                        <option value="教育/培训">教育/培训</option>
                        <option value="咨询/顾问">咨询/顾问</option>
                        <option value="学术/科研">学术/科研</option>
                        <option value="法律">法律</option>
                        <option value="设计/创意">设计/创意</option>
                        <option value="文学/传媒/影视">文学/传媒/影视</option>
                        <option value="餐饮/旅游">餐饮/旅游</option>
                        <option value="医疗/护理">医疗/护理</option>
                        <option value="保健/美容">保健/美容</option>
                        <option value="生物/制药/医疗器械">生物/制药/医疗器械</option>
                        <option value="体育工作者">体育工作者</option>
                        <option value="翻译">翻译</option>
                        <option value="公务员/国家干部">公务员/国家干部</option>
                        <option value="私营业主">私营业主</option>
                        <option value="农/林/牧/渔业">农/林/牧/渔业</option>
                        <option value="警察/其他">警察/其他</option>
                        <option value="自由职业者">自由职业者</option>
                        <option value="其他">其他</option>
                    </select>
                </div>
                <div id="div_money" class="form_li">
                    <label><font color="red">*</font> 月薪收入：</label>
                    <select name="money" id="salary">
                        <option value="">=请选择=</option>
                        <option value="2000元以下">2000元以下</option>
                        <option value="2000~5000元" >2000~5000元</option>
                        <option value="5000~10000元">5000~10000元</option>
                        <option value="10000~20000元">10000~20000元</option>
                        <option value="20000元以上">20000元以上</option></select>
                </div>
                <div id="div_intor" class="form_li">
            </div>
            <div class="form_li">
                <div class="tijiao">
                        <button class="button_register_s1" style="pointer:hand;" type='submit' onclick="return checkreg();">免费注册</button>
                    </a>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="right">
        <a class="login" href="index.php?c=passport&a=login">已有帐号？ 点此登录&gt;&gt;</a>
        <ul class="list">
            <li class="first">
                <span class="ico ico-pro"></span>
                <div class="info">
                    <h4>高素质、诚信的交友会员</h4>
                    <p>面向渴望爱情婚姻的单身人士</p>
                    <p>需提交详细资料和身份证件</p>
                    <p>专业的人工审核跟进</p>
                </div>
            </li>
            <li>
                <span class="ico ico-date"></span>
                <div class="info">
                    <h4>以“约会”为主导交友模式</h4>
                    <p>自主定制约会，挑选约会对象</p>
                    <p>通过约会观察</p>
                    <p>直接快速判断是否适合交往</p>
                </div>
            </li>
            <li>
                <span class="ico ico-secu"></span>
                <div class="info">
                    <h4>安全的交友平台</h4>
                    <p>涉及隐私的资料都被保密</p>
                    <p>约会双方必须验证联系方式</p>
                    <p>成功后由网站代为交换</p>
                </div>
            </li>
            <div style="clear:both;"></div>
        </ul>

    </div>
    <div style="clear:both;"></div>
</div>
@stop
<script language="javascript">
    function checkreg(){
        var t = "";
        var v = "";

        t = "username";
        v = $("#"+t).val();
        if(v=="") {
            alert("用户名不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "password";
        v = $("#"+t).val();
        if(v=="") {
            alert("密码不能为空");
            $('#'+t).focus();
            return false;
        }
        else {
            if(v.length<6) {
                alert('密码长度不对');
                $('#'+t).focus();
                return false;
            }

            if($('#confirmpassword').val() != v) {
                alert("确认密码不正确");
                $('#confirmpassword').focus();
                return false;
            }
        }
        t = "produce";
        v = $("#"+t).val();
        if(v=="") {
            alert("内心独白不能为空");
            $('#'+t).focus();
            return false;
        }
        else {
            if(v.length<6|| v.length>20) {
                alert('内心独白字数在6到20字之间');
                $('#'+t).focus();
                return false;
            }
        }
        t = "email";
        v = $("#"+t).val();
        if(v=="") {
            alert("邮箱不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "need";
        v = $("#"+t).val();
        if(v=="") {
            alert("择偶需求不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "intor";
        v = $("#"+t).val();
        if(v=="") {
            alert("自我评价不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "age";
        v = $("#"+t).val();
        if(v=="") {
            alert("年龄不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "height";
        v = $("#"+t).val();
        if(v=="") {
            alert("身高不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "study";
        v = $("#"+t).val();
        if(v=="") {
            alert("学历不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "salary";
        v = $("#"+t).val();
        if(v=="") {
            alert("月薪不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "jobs";
        v = $("#"+t).val();
        if(v=="") {
            alert("职业不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "maraystate";
        v = $("#"+t).val();
        if(v=="") {
            alert("婚姻状况不能为空");
            $('#'+t).focus();
            return false;
        }
        t = "hu";
        v = $("#"+t).val();
        if(v=="") {
            alert("户籍不能为空");
            $('#'+t).focus();
            return false;
        }
        $('#register_form').submit();
        return true;
    }

</script>
