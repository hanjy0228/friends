@extends('Home.layouts.main')

@section('content')

<div id="page-index" class="page" style="background:#ffd7d7;">
    <div class="oe_nlogin" style="background:url('../../../../img/login.png') right 50px no-repeat #ffd7d7;">
        <div class="oe_nlogincn">
            <div class="hd">
                登录网站
            </div>
            <div class="bd">
                <form action="login" method="post">
                    {{ csrf_field() }}

                    <ul>
                    <li>
                        <label>帐号</label>
                        <input type="text" name="user" id="loginname" value="用户名" class="w1" />
                    </li>
                    <li>
                        <label>密码</label>
                        <input type="password" name="pass" id="password" class="w1" />
                    </li>

                    <li class="btn">
                        <a href="javascript:;">
                            <input id="but_login" type="submit" value="登 陆">

                        </a>
                        <a class="a_2" href="index.php?c=passport&a=forget">忘记密码</a>
                    </li>
                    <li class="other">
                        <a href="index.php?c=connect&mod=qq"><img src="../../../../img/qq.gif" />QQ登录</a>  &nbsp;&nbsp;
                        <a href="index.php?c=connect&mod=sina"><img src="../../../../img/sina.gif" />新浪微博登录</a>  &nbsp;&nbsp;
                    </li>
                </ul>
                </form>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
@stop