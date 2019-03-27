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
                <input type="user" name="user"/>
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
                    <input type="text" name="age"/>
                </div>
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

        t = "email";
        v = $("#"+t).val();
        if(v=="") {
            alert("邮箱不能为空");
            $('#'+t).focus();
            return false;
        }

        t = "checkcode";
        v = $("#"+t).val();
        if(v=="") {
            alert("验证码不能为空");
            $('#'+t).focus();
            return false;
        }


        t = "email";
        v = $("#"+t).val();
        if(v=="") {
            alert("邮箱不能为空");
            $('#'+t).focus();
            return false;
        }






        //联系方式







        $('#register_form').submit();
        return true;
    }
    //验证码
    function refreshCode(tipsid) {
        var ccImg = document.getElementById("checkCodeImg");
        if (ccImg) {
            ccImg.src= ccImg.src + '&' +Math.random();
            if (tipsid != '') {
                $('#'+tipsid).html('<font color=#999999>请输入验证码</font>');
            }
        }
    }
</script>
