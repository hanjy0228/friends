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
                        <input type="text" name="user" id="loginname" value="" class="w1" />
                    </li>
                    <li>
                        <label>密码</label>
                        <input type="password" name="pass" id="password" class="w1" />
                    </li>

                    <li class="btn">
                        <a href="javascript:;">
                           <input id="but_login" type="submit" style="background-color:#ff7a8a;width:100px;height: 30px;margin-left: 50px" value="登 陆">
                        </a>
                    </li>
                </ul>
                </form>
            </div>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>
@stop