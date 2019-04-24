@extends('index.layous.qianindex')

@section('content')
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
                        <td class="rblock">限6 ~ 20个字<strong id="counter"></strong></td>
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
                            温馨提示：<br>1、内心独白字数需在6 ~ 20个字之内；<br>2、内心独白中请勿出现广告、色情或其他不健康的内容；
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div style="margin: 30px;"></div>
</div>
@stop