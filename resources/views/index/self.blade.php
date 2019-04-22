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
        <div class="div_smallnav_content_hover basicdata" style="height: 472px;">
            <!--基本资料 Begin-->
            <form name="myform" id="myform" action="/index/upd_user" method="post" enctype="multipart/form-data">
                <table cellpadding="0" cellspacing="0" border="0" width="98%" class="user-table table-margin lh35">
                    <tbody>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="hidden" name="id" value="{{$data->id}}">
                    <tr>
                        <td colspan="4" style="padding-bottom:10px;"><div class="item_title" style="width:100%"><p>基本资料</p><span class="shadow"></span></div></td>
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
                                <?php if($data->sex == 2){ ?>
                                    男
                                <?php }else{ ?>
                                    女
                                <?php }   ?>
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td class="lblock">学历<span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php
                                if ($data->study=1) {
                                    echo "本科";
                                } elseif ($data->study=2) {
                                    echo "硕士";
                                } else {
                                     echo "博士";
                                }
                            ?>
                        </td>
                        <td class="lblock">户 籍 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->hu ;?>
                        </td>
                    </tr>
                    <!-- 婚姻、身高 -->
                    <tr>
                        <td class="lblock">婚姻状态 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php if($data->maraystate == 1){ ?>
                            未婚
                            <?php }else{ ?>
                            离异
                            <?php }   ?>
                        <td class="lblock">身 高 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->height ;?><span class="f_red" id="dheight"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="lblock">择偶要求 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->need ;?><span class="f_red" id="dheight"></span>
                        </td>
                        <td class="lblock">自我评价 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->intor ;?><span class="f_red" id="dheight"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="lblock">职 业 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->profession ;?><span class="f_red" id="dheight"></span>
                        </td>
                        <td class="lblock">月薪收入 <span class="f_red">*</span></td>
                        <td class="rblock">
                            <?php echo $data->money ;?><span class="f_red" id="dheight"></span>
                        </td>
                    </tr>
                    <!-- 提交按钮 -->
                    <tr>
                        <td class="lblock" height="50px"></td>
                        <td class="rblock" colspan="3">
                           <a href="edit_self" > <input type="button" name="btn_save" value="修改资料"  class="button-red"></a>
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