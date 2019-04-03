@extends('index.layous.qianindex')

@section('content')

    <!--//user_main_left End-->

    <div class="main_right">
        <div class="oe_tab_nv">
            <ul>
                <li class="tab_item current"><a href="/index/self">基本资料</a></li>
                <li class="tab_item"><a href="/index/self_content?id={{$data->id}}">内心独白</a></li>
                <li class="tab_item"><a href="/index/upd_pass?id={{$data->id}}">修改密码</a></li>
                <li class="tab_item"><a href="/index/upd_state?id={{$data->id}}">更改状态</a></li>
            </ul>
        </div>
        <div class="div_smallnav_content_hover basicdata">
            <!--基本资料 Begin-->
            <form name="myform" id="myform" action="/index/upd_user" method="post" enctype="multipart/form-data">
                <table cellpadding="0" cellspacing="0" border="0" width="98%" class="user-table table-margin lh35">
                    <tbody>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="id" value="{{$data->id}}">
                    <tr>
                        <td colspan="4" style="padding-bottom:10px;"><div class="item_title" style="width:100%"><p>基本资料</p><span class="shadow"></span></div></td>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <label for="" class="avatar-label">用户头像</label>
                            <input type="file" name="avatar">
                            @if($data->avatar)
                                <br>
                                <img class="thumbnail img-responsive" src="{{ $data->avatar }}" width="200" />
                            @endif
                        </div>
                        <td class="lblock">上传照片<span class="f_red">*</span></td>
                        <td class="rblock">
                            <input type="file" name="file">
                            <span class="f_red" id="dmarrystatus"></span>
                        </td>
                        <td class="lblock"></td>
                        <td class="rblock">
                            <span class="f_red" id="dheight"></span>
                        </td>
                    </tr>
                    <!-- 邮箱、名称 -->
                    <tr>
                        <td class="lblock" width="15%">登录邮箱 <span class="f_red"></span></td>
                        <td class="rblock" width="35%"><font color="#999999"><?php echo $data->email ;?></font></td>
                        <td class="lblock" width="15%">用 户 名 <span class="f_red"></span></td>
                        <td class="rblock" width="35%"><font color="#999999"><?php echo $data->nichen ;?></font></td>
                    </tr>
                    <!-- 性别、生日 -->
                    <tr>
                        <td class="lblock">性 别 <span class="f_red"></span></td>
                        <td class="rblock"><font color="#999999">
                                <?php if($data->sex == 1){ ?>
                                    男
                                <?php }else{ ?>
                                    女
                                <?php }   ?>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class="lblock">学历<span class="f_red"></span></td>
                        <td class="rblock">
                            <select name="study">
                                <option value="">=请选择=</option>
                                <option value="1">高中</option>
                                <option value="2">大学</option>
                                <option value="3">本科</option>
                                <option value="4">其他</option>
                            </select>
                        </td>
                        <td class="lblock">户 籍 <span class="f_red"></span></td>
                        <td class="rblock">
                            <select name="hu" id="nationprovinceid" onchange="fetch_hometown(&#39;nationprovinceid&#39;, &#39;nationcityid&#39;, &#39;0&#39;, &#39;=请选择=&#39;);">
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
                            </span>
                            <span id="json_nationcityid">
			</span>&nbsp;<span id="dnationcityid" class="f_red"></span>
                        </td>
                    </tr>
                    <!-- 婚姻、身高 -->
                    <tr>
                        <td class="lblock">婚姻状态 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <select name="maraystate" id="marrystatus">
                                <option value="">=请选择=</option>
                                <option value="1" >未婚</option>
                                <option value="2">已婚</option>
                                <option value="3">离异</option>
                            </select>
                            <span class="f_red" id="dmarrystatus"></span></td>
                        <td class="lblock">身 高 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <input type="text"  name="height" style="width: 50px;"> cm
                            <span class="f_red" id="dheight"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="lblock">择偶要求 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <input type="text"id="need"name="need" style="width: 200px;height: 70px;margin-top: 10px;">
                            <span class="f_red" id="dneed"></span></td>
                        {{--<td class="lblock">择偶要求 <span class="f_red">*</span></td>--}}
                        {{--<td class="rblock">--}}
                            {{--<textarea type="text"id="need"name="need" style="width: 200px;height: 70px;margin-top: 10px;"></textarea>--}}
                            {{--<span class="f_red" id="dneed"></span>--}}
                        {{--</td>--}}
                        <td class="lblock">自我评价 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <input type="text" id="intor" name="intor" style="width: 200px;height: 70px;margin-top: 10px;">
                            <span class="f_red" id="dintor"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="lblock">职 业 <span class="f_red"></span></td>
                        <td class="rblock"><select name="profession" id="jobs">
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
                            </select> <span id="djobs">
                            </span>
                        </td>
                        <td class="lblock">月薪收入 <span class="f_red">*</span></td>
                        <td class="rblock"><select name="money" id="salary">
                                <option value="">=请选择=</option>
                                <option value="2000元以下">2000元以下</option>
                                <option value="2000~5000元" >2000~5000元</option>
                                <option value="5000~10000元">5000~10000元</option>
                                <option value="10000~20000元">10000~20000元</option>
                                <option value="20000元以上">20000元以上</option></select>
                            <span id="dsalary" class="f_red"></span>
                        </td>
                    </tr>
                    <!-- 住房、购车 -->

                   
                    <!-- 提交按钮 -->
                    <tr>
                        <td class="lblock" height="50px"></td>
                        <td class="rblock" colspan="3">
                            <input type="button" name="btn_save" value="提交保存" onclick="return checkbase();" class="button-red">
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

@stop