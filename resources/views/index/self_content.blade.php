@extends('index.layous.qianindex')

@section('content')
    <!--//user_main_left End-->

    <div class="main_right">
        <div class="oe_tab_nv">
            <ul>
                <li class="tab_item "><a href="/index/self">基本资料</a></li>
                <li class="tab_item current"><a href="/index/self_content">内心独白</a></li>
                <li class="tab_item"><a href="/index/upd_pass">修改密码</a></li>
                <li class="tab_item"><a href="/index/upd_state">更改状态</a></li>
            </ul>
        </div>
        <div class="div_smallnav_content_hover basicdata">


            <!--基本资料 Begin-->
            <form name="myform" id="myform" action="/index/self_content_upd" method="post">
                <table cellpadding="0" cellspacing="0" border="0" width="98%" class="user-table table-margin lh35">
                    <tbody>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$data->id}}">
                        <td class="lblock">内心独白 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <textarea name="produce" id="content" style="width:98%;height:200px;display:;
                            overflow:auto;" onkeydown="count_char(&#39;content&#39;, &#39;counter&#39;);" onkeyup="count_char(&#39;content&#39;, &#39;counter&#39;);
">{{$data->produce}}</textarea>
                            <br><span id="dcontent" class="f_red"></span>
                        </td>
                    </tr>
                    <!-- 字数统计 -->
                    <tr>
                        <td class="lblock"></td>
                        <td class="rblock">限20 ~ 1500个字<strong id="counter"></strong></td>
                    </tr>
                    <tr>
                        <td class="lblock"></td>
                        <td class="rblock">
                            <input type="button" name="btn_save" value="提交保存" onclick="return checkmonolog();" class="button-red">
                        </td>
                    </tr>
                    <!-- 温馨提示 -->
                    <tr>
                        <td class="rblock" colspan="2" align="left">
                            温馨提示：<br>1、内心独白字数需在20 ~ 1500个字之内；<br>2、内心独白中请勿出现QQ、微信、电话号码以及网址、广告、色情或其他不健康的内容；<br>3、修改保存后，我们将进行审核，通过了才能显示在个人资料页面。
                        </td>
                    </tr>
                    </tbody></table>
            </form>
            <!--基本资料 End-->

        </div>
        <div class="clear"></div>
        <!--//div_smallnav_content_hover End-->
    </div>
    <div class="clear"></div>
    <!--//main_right End-->

    <div style="margin: 30px;"></div>
    <!--//right_kj End-->

</div>
<!--//user_main End-->


<!--//user_footer End-->
@stop