@extends('Home.layouts.main')

@section('content')
<div class="oe_banner">
    <div class="bd">


        <ul>
            <li style="background:url('../../../../img/index/239cb56db7339efa.jpg') no-repeat center top"><a href="#"></a></li>
            <li style="background:url('../../../../img/index/84fc0cf8b7f18989.jpg') no-repeat center top"><a href="#"></a></li>
        </ul>
    </div>
    <div class="hd">
        <ul>
            <li><span></span></li><li><span></span></li>    </ul>
    </div>
    <div class="banner_bg"></div>
</div>
<script type="text/javascript">
    jQuery(".oe_banner").slide({mainCell:".bd ul",autoPlay:true});
</script>

<div class="oe_newusrer">
    <div class="inform">
        @foreach($message_flag as $k => $v)

            @if($v->state=0)
            您有新的私信
                @else
                @endif
        @endforeach
            @foreach($zan_flag as $k => $v)

                @if($v->state=0)
                    您有新的点赞
                @else
                @endif
            @endforeach
            @foreach($comment_flag as $k => $v)

                @if($v->state=0)
                    您有新的评论
                @else
                @endif
            @endforeach

        {{--{{$zan_flag}}&&<p>您有新点赞</p>--}}
        {{--{{$comment_flag}}&&<p>您有新评论</p>--}}
    </div>
    <div class="index_search">
        <em class="dian"></em>
        <b class="text">快速查找</b>
        <form name="" id="search_normal" method="post" action="sou">
            {{ csrf_field() }}
            <div class="oes0_searchcon">
                <div class="select">
                    <i class="jiao"></i>
                    <span id="s_sex_text">
        		  性别
		          </span>
                    <select name="sex" id="s_sex" f="but_change_sel" data-tid="s_sex_text" />
                    <option value="2">女会员</option>
                    <option value="1">男会员</option>
                    </select>
                </div>
                <div class="select">
                    <i class="jiao"></i>
                    <span id="s_marry_text">
            		  婚况
		          </span>
                    <select name="maraystate" id="s_marry" f="but_change_sel" data-tid="s_marry_text">
                        <option value="1">未婚</option>
                        <option value="2">已婚</option>
                        <option value="3">离异</option>
                    </select>
                </div>
                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_age_text" f="but_cond_multi_sel" data-box="s_age_box">
                            年龄
                      </span>
                    <div class="selectbd" style="width:160px;display:none;" id="s_age_box">
                        <h3>请选择年龄</h3>
                        <select name='age' id='s_sage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
                        &nbsp;至&nbsp;
                        <select name='age1' id='s_eage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
                        <p><label f="but_cond_multi_confirm" data-id1="s_sage" data-id2="s_eage" data-tid="s_age_text" data-tips="年龄" data-box="s_age_box">确定</label></p>
                    </div>
                </div>
                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_height_text" f="but_cond_multi_sel" data-box="s_height_box">
                            身高
                        </span>
                    <div class="selectbd" style="width:180px;display:none;" id="s_height_box">
                        <h3>请选择身高</h3>
                        <select name="height" id="s_sheight" f="but_change_sel" data-tid="s_sheight_text">
                            <option value="">不限</option>
                            <option value="130">130CM</option>
                            <option value="131">131CM</option>
                            <option value="132">132CM</option>
                            <option value="133">133CM</option>
                            <option value="134">134CM</option>
                            <option value="135">135CM</option>
                            <option value="136">136CM</option>
                            <option value="137">137CM</option>
                            <option value="138">138CM</option>
                            <option value="139">139CM</option>
                            <option value="140">140CM</option>
                            <option value="141">141CM</option>
                            <option value="142">142CM</option>
                            <option value="143">143CM</option>
                            <option value="144">144CM</option>
                            <option value="145">145CM</option>
                            <option value="146">146CM</option>
                            <option value="147">147CM</option>
                            <option value="148">148CM</option>
                            <option value="149">149CM</option>
                            <option value="150">150CM</option>
                            <option value="151">151CM</option>
                            <option value="152">152CM</option>
                            <option value="153">153CM</option>
                            <option value="154">154CM</option>
                            <option value="155">155CM</option>
                            <option value="156">156CM</option>
                            <option value="157">157CM</option>
                            <option value="158">158CM</option>
                            <option value="159">159CM</option>
                            <option value="160">160CM</option>
                            <option value="161">161CM</option>
                            <option value="162">162CM</option>
                            <option value="163">163CM</option>
                            <option value="164">164CM</option>
                            <option value="165">165CM</option>
                            <option value="166">166CM</option>
                            <option value="167">167CM</option>
                            <option value="168">168CM</option>
                            <option value="169">169CM</option>
                            <option value="170">170CM</option>
                            <option value="171">171CM</option>
                            <option value="172">172CM</option>
                            <option value="173">173CM</option>
                            <option value="174">174CM</option>
                            <option value="175">175CM</option>
                            <option value="176">176CM</option>
                            <option value="177">177CM</option>
                            <option value="178">178CM</option>
                            <option value="179">179CM</option>
                            <option value="180">180CM</option>
                            <option value="181">181CM</option>
                            <option value="182">182CM</option>
                            <option value="183">183CM</option>
                            <option value="184">184CM</option>
                            <option value="185">185CM</option>
                            <option value="186">186CM</option>
                            <option value="187">187CM</option>
                            <option value="188">188CM</option>
                            <option value="189">189CM</option>
                            <option value="190">190CM</option>
                            <option value="191">191CM</option>
                            <option value="192">192CM</option>
                            <option value="193">193CM</option>
                            <option value="194">194CM</option>
                            <option value="195">195CM</option>
                            <option value="196">196CM</option>
                            <option value="197">197CM</option>
                            <option value="198">198CM</option>
                            <option value="199">199CM</option>
                            <option value="200">200CM</option>
                        </select>
                        &nbsp;至&nbsp;
                        <select name="height1" id="s_eheight" f="but_change_sel" data-tid="s_eheight_text">
                            <option value="">不限</option>
                            <option value="130">130CM</option>
                            <option value="131">131CM</option>
                            <option value="132">132CM</option>
                            <option value="133">133CM</option>
                            <option value="134">134CM</option>
                            <option value="135">135CM</option>
                            <option value="136">136CM</option>
                            <option value="137">137CM</option>
                            <option value="138">138CM</option>
                            <option value="139">139CM</option>
                            <option value="140">140CM</option>
                            <option value="141">141CM</option>
                            <option value="142">142CM</option>
                            <option value="143">143CM</option>
                            <option value="144">144CM</option>
                            <option value="145">145CM</option>
                            <option value="146">146CM</option>
                            <option value="147">147CM</option>
                            <option value="148">148CM</option>
                            <option value="149">149CM</option>
                            <option value="150">150CM</option>
                            <option value="151">151CM</option>
                            <option value="152">152CM</option>
                            <option value="153">153CM</option>
                            <option value="154">154CM</option>
                            <option value="155">155CM</option>
                            <option value="156">156CM</option>
                            <option value="157">157CM</option>
                            <option value="158">158CM</option>
                            <option value="159">159CM</option>
                            <option value="160">160CM</option>
                            <option value="161">161CM</option>
                            <option value="162">162CM</option>
                            <option value="163">163CM</option>
                            <option value="164">164CM</option>
                            <option value="165">165CM</option>
                            <option value="166">166CM</option>
                            <option value="167">167CM</option>
                            <option value="168">168CM</option>
                            <option value="169">169CM</option>
                            <option value="170">170CM</option>
                            <option value="171">171CM</option>
                            <option value="172">172CM</option>
                            <option value="173">173CM</option>
                            <option value="174">174CM</option>
                            <option value="175">175CM</option>
                            <option value="176">176CM</option>
                            <option value="177">177CM</option>
                            <option value="178">178CM</option>
                            <option value="179">179CM</option>
                            <option value="180">180CM</option>
                            <option value="181">181CM</option>
                            <option value="182">182CM</option>
                            <option value="183">183CM</option>
                            <option value="184">184CM</option>
                            <option value="185">185CM</option>
                            <option value="186">186CM</option>
                            <option value="187">187CM</option>
                            <option value="188">188CM</option>
                            <option value="189">189CM</option>
                            <option value="190">190CM</option>
                            <option value="191">191CM</option>
                            <option value="192">192CM</option>
                            <option value="193">193CM</option>
                            <option value="194">194CM</option>
                            <option value="195">195CM</option>
                            <option value="196">196CM</option>
                            <option value="197">197CM</option>
                            <option value="198">198CM</option>
                            <option value="199">199CM</option>
                            <option value="200">200CM</option>
                        </select>
                        <p><label f="but_cond_multi_confirm" data-id1="s_sheight" data-id2="s_eheight" data-tid="s_height_text" data-tips="身高" data-box="s_height_box">确定</label></p>
                    </div>
                </div>

                <input class="btn_1" f="but_search_cond_user" type="submit" value="搜索">
            </div>
        </form>
        <div class="clear"></div>
    </div>
    <div class="oe_nuser">
        <div class="hd">
            <b>推荐会员</b>

            <div class="clear"></div>
        </div>
        <div class="bd drop">

            <div>
                @foreach($list as $k=>$v)
                <dl class="cin">
                    <dt><a href="show?id={{$list[$k]->id}}" target="_blank"><img src="../../../uploads/{{$list[$k]->img}}" /></a></dt>
                    <dd>
                        <h3><a href="show?id={{$list[$k]->id}}" target="_blank">{{$list[$k]->nichen}}</a></h3>
                        <p class="p_1">
                            <span>{{$list[$k]->hu}}</span>
                            <label>{{$list[$k]->height}}CM</label>
                            <br>
                            {{$list[$k]->money}}</p>
                        <p class="btn">
                             <h2 id="{{$v->id}}">&nbsp;&nbsp;{{$v->zan}}</h2>
                        <button class="zan" ids="{{$v->id}}"  >点赞</button>

                            </p>
                    </dd>
                    <div class="clear"></div>
                </dl>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".oe_nuser").slide({trigger:"click"});
    </script>
</div>
<script src="../../../js/jquery-3.3.1.js"></script>
<script>

    $('.zan').click(function () {
        var id=$(this).attr('ids');
        $.post("zan", {id:id},
            function(data){
                $("#"+id).html("&nbsp;&nbsp;"+data);
            });
    });

</script>


<script type="text/javascript">
    jQuery(".oe_party").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0,returnDefault:true});
</script>


<div class="oe_story">
    <div class="top"></div>
    <div class="oe_storycon">
        <div class="hd">
            成功案例
            <span></span>
            <img src="../../../../img/p_6.png" />
        </div>
        @foreach($arr as $k=>$v)
        <div class="bd">

            <dl class="dl_1 nLi  on ">
                <dt><a href="case_list?id={{$arr[$k]->id}}"><img src="../../../uploads/{{$arr[$k]->img}}" /></a></dt>
                <dd class="sub" >
                    <p class="p_1"></p>
                    <div>
                        <h3><a href="case_list?id={{$arr[$k]->id}}" target="_blank">{{$arr[$k]->title}}</a></h3>
                        <p class="p_2"><a href="case_list?id={{$arr[$k]->id}}" target="_blank" rel="nofollow">查看详情</a></p>
                    </div>
                </dd>
            </dl>

            <div class="clear"></div>
        </div>
        @endforeach
    </div>
    <div class="bottom"></div>
</div>
<script type="text/javascript">
    jQuery(".oe_story").slide({ type:"menu", titCell:".nLi", targetCell:".sub",effect:"slideDown",delayTime:300,triggerTime:0});
</script>
@stop
