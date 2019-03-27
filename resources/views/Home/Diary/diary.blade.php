@extends('Home.layouts.main')

@section('content')
<div class="oein_search">
    <div class="oein_searchcon">
        <em class="dian"></em>
        <b class="text">快速查找</b>
        <form name="my_ser_cond_form" id="search_normal" method="post" action="index.php?c=user&a=list">
            <input type="hidden" name="storeid" id="storeid" value="" />
            <div class="oes0_searchcon">
                <div class="select">
                    <i class="jiao"></i>
                    <span id="s_sex_text">
        		  性别
		          </span>
                    <select name="s_sex" id="s_sex" f="but_change_sel" data-tid="s_sex_text" />
                    <option value="">不限</option>
                    <option value="2">女会员</option>
                    <option value="1">男会员</option>
                    </select>
                </div>
                <div class="select">
                    <i class="jiao"></i>
                    <span id="s_marry_text">
            		  婚况
		          </span>
                    <select name="s_marry" id="s_marry" f="but_change_sel" data-tid="s_marry_text">
                        <option value="">不限</option>
                        <option value="1">未婚</option>
                        <option value="2">已婚</option>
                        <option value="3">离异</option>
                        <option value="4">丧偶</option>
                    </select>
                </div>
                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_age_text" f="but_cond_multi_sel" data-box="s_age_box">
                            年龄
                      </span>
                    <div class="selectbd" style="width:160px;display:none;" id="s_age_box">
                        <h3>请选择年龄</h3>
                        <select name='s_sage' id='s_sage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
                        &nbsp;至&nbsp;
                        <select name='s_eage' id='s_eage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
                        <p><label f="but_cond_multi_confirm" data-id1="s_sage" data-id2="s_eage" data-tid="s_age_text" data-tips="年龄" data-box="s_age_box">确定</label></p>
                    </div>
                </div>
                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_dist_text" f="but_cond_multi_sel" data-box="s_dist_box">
		            所在地区
          		</span>
                    <div class="selectbd" style="width:300px;display:none;" id="s_dist_box">
                        <h3>请选择地区</h3>
                        <select name='s_dist1' id='s_dist1' onchange="fetch_city('s_dist1', 's_dist2', '0', '=请选择=', '1', 's_dist3', '0');"><option value=''>=请选择=</option><option value='1'>北京</option><option value='3'>天津</option><option value='5'>上海</option><option value='7'>重庆</option><option value='9'>广东</option><option value='33'>江苏</option><option value='57'>浙江</option><option value='85'>福建</option><option value='98'>湖南</option><option value='122'>湖北</option><option value='152'>山东</option><option value='177'>辽宁</option><option value='198'>吉林</option><option value='218'>云南</option><option value='233'>四川</option><option value='252'>安徽</option><option value='271'>江西</option><option value='286'>黑龙江</option><option value='306'>河北</option><option value='326'>陕西</option><option value='336'>海南</option><option value='342'>河南</option><option value='362'>山西</option><option value='374'>内蒙古</option><option value='392'>广西</option><option value='405'>贵州</option><option value='416'>宁夏</option><option value='421'>青海</option><option value='427'>新疆</option><option value='445'>西藏</option><option value='449'>甘肃</option><option value='463'>台湾</option><option value='469'>香港</option><option value='471'>澳门</option><option value='473'>国外</option><option value='475'>其他</option></select>
                        <b id="json_s_dist2" style="font-weight:normal;">
                            <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
                        </b>
                        <b id="json_s_dist3" style="font-weight:normal;">
                            <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
                        </b>
                        <p><label f="but_cond_three_confirm" data-id1="s_dist1" data-id2="s_dist2" data-id3="s_dist3" data-tid="s_dist_text" data-tips="地区" data-box="s_dist_box">确定</label></p>
                    </div>
                </div>
                <div class="select">
                    <i class="jiao"></i>
                    <span id="s_avatar_text">
            		  不限
		          </span>
                    <select name="s_avatar" id="s_avatar" f="but_change_sel" data-tid="s_avatar_text">
                        <option value="2">不限</option>
                        <option value="1">有头像</option>
                    </select>
                </div>
                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_height_text" f="but_cond_multi_sel" data-box="s_height_box">
                            身高
                        </span>
                    <div class="selectbd" style="width:160px;display:none;" id="s_height_box">
                        <h3>请选择身高</h3>
                        <select name="s_sheight" id="s_sheight" f="but_change_sel" data-tid="s_sheight_text">
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
                        <select name="s_eheight" id="s_eheight" f="but_change_sel" data-tid="s_eheight_text">
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

                <div class="selectarea">
                    <i class="jiao"></i>
                    <span id="s_weight_text" f="but_cond_multi_sel" data-box="s_weight_box">
                            体重
                        </span>
                    <div class="selectbd" style="width:160px;display:none;" id="s_weight_box">
                        <h3>请选择体重</h3>
                        <select name="s_sweight" id="s_sweight" f="but_change_sel" data-tid="s_sweight_text">
                            <option value="">不限</option>
                            <option value="30">30KG</option>
                            <option value="31">31KG</option>
                            <option value="32">32KG</option>
                            <option value="33">33KG</option>
                            <option value="34">34KG</option>
                            <option value="35">35KG</option>
                            <option value="36">36KG</option>
                            <option value="37">37KG</option>
                            <option value="38">38KG</option>
                            <option value="39">39KG</option>
                            <option value="40">40KG</option>
                            <option value="41">41KG</option>
                            <option value="42">42KG</option>
                            <option value="43">43KG</option>
                            <option value="44">44KG</option>
                            <option value="45">45KG</option>
                            <option value="46">46KG</option>
                            <option value="47">47KG</option>
                            <option value="48">48KG</option>
                            <option value="49">49KG</option>
                            <option value="50">50KG</option>
                            <option value="51">51KG</option>
                            <option value="52">52KG</option>
                            <option value="53">53KG</option>
                            <option value="54">54KG</option>
                            <option value="55">55KG</option>
                            <option value="56">56KG</option>
                            <option value="57">57KG</option>
                            <option value="58">58KG</option>
                            <option value="59">59KG</option>
                            <option value="60">60KG</option>
                            <option value="61">61KG</option>
                            <option value="62">62KG</option>
                            <option value="63">63KG</option>
                            <option value="64">64KG</option>
                            <option value="65">65KG</option>
                            <option value="66">66KG</option>
                            <option value="67">67KG</option>
                            <option value="68">68KG</option>
                            <option value="69">69KG</option>
                            <option value="70">70KG</option>
                            <option value="71">71KG</option>
                            <option value="72">72KG</option>
                            <option value="73">73KG</option>
                            <option value="74">74KG</option>
                            <option value="75">75KG</option>
                            <option value="76">76KG</option>
                            <option value="77">77KG</option>
                            <option value="78">78KG</option>
                            <option value="79">79KG</option>
                            <option value="80">80KG</option>
                            <option value="81">81KG</option>
                            <option value="82">82KG</option>
                            <option value="83">83KG</option>
                            <option value="84">84KG</option>
                            <option value="85">85KG</option>
                            <option value="86">86KG</option>
                            <option value="87">87KG</option>
                            <option value="88">88KG</option>
                            <option value="89">89KG</option>
                            <option value="90">90KG</option>
                            <option value="91">91KG</option>
                            <option value="92">92KG</option>
                            <option value="93">93KG</option>
                            <option value="94">94KG</option>
                            <option value="95">95KG</option>
                            <option value="96">96KG</option>
                            <option value="97">97KG</option>
                            <option value="98">98KG</option>
                            <option value="99">99KG</option>
                            <option value="100">100KG</option>
                            <option value="101">101KG</option>
                            <option value="102">102KG</option>
                            <option value="103">103KG</option>
                            <option value="104">104KG</option>
                            <option value="105">105KG</option>
                            <option value="106">106KG</option>
                            <option value="107">107KG</option>
                            <option value="108">108KG</option>
                            <option value="109">109KG</option>
                            <option value="110">110KG</option>
                            <option value="111">111KG</option>
                            <option value="112">112KG</option>
                            <option value="113">113KG</option>
                            <option value="114">114KG</option>
                            <option value="115">115KG</option>
                            <option value="116">116KG</option>
                            <option value="117">117KG</option>
                            <option value="118">118KG</option>
                            <option value="119">119KG</option>
                            <option value="120">120KG</option>
                            <option value="121">121KG</option>
                            <option value="122">122KG</option>
                            <option value="123">123KG</option>
                            <option value="124">124KG</option>
                            <option value="125">125KG</option>
                            <option value="126">126KG</option>
                            <option value="127">127KG</option>
                            <option value="128">128KG</option>
                            <option value="129">129KG</option>
                            <option value="130">130KG</option>
                            <option value="131">131KG</option>
                            <option value="132">132KG</option>
                            <option value="133">133KG</option>
                            <option value="134">134KG</option>
                            <option value="135">135KG</option>
                            <option value="136">136KG</option>
                            <option value="137">137KG</option>
                            <option value="138">138KG</option>
                            <option value="139">139KG</option>
                            <option value="140">140KG</option>
                            <option value="141">141KG</option>
                            <option value="142">142KG</option>
                            <option value="143">143KG</option>
                            <option value="144">144KG</option>
                            <option value="145">145KG</option>
                            <option value="146">146KG</option>
                            <option value="147">147KG</option>
                            <option value="148">148KG</option>
                            <option value="149">149KG</option>
                            <option value="150">150KG</option>
                        </select>
                        &nbsp;至&nbsp;
                        <select name="s_eweight" id="s_eweight" f="but_change_sel" data-tid="s_eweight_text">
                            <option value="">不限</option>
                            <option value="30">30KG</option>
                            <option value="31">31KG</option>
                            <option value="32">32KG</option>
                            <option value="33">33KG</option>
                            <option value="34">34KG</option>
                            <option value="35">35KG</option>
                            <option value="36">36KG</option>
                            <option value="37">37KG</option>
                            <option value="38">38KG</option>
                            <option value="39">39KG</option>
                            <option value="40">40KG</option>
                            <option value="41">41KG</option>
                            <option value="42">42KG</option>
                            <option value="43">43KG</option>
                            <option value="44">44KG</option>
                            <option value="45">45KG</option>
                            <option value="46">46KG</option>
                            <option value="47">47KG</option>
                            <option value="48">48KG</option>
                            <option value="49">49KG</option>
                            <option value="50">50KG</option>
                            <option value="51">51KG</option>
                            <option value="52">52KG</option>
                            <option value="53">53KG</option>
                            <option value="54">54KG</option>
                            <option value="55">55KG</option>
                            <option value="56">56KG</option>
                            <option value="57">57KG</option>
                            <option value="58">58KG</option>
                            <option value="59">59KG</option>
                            <option value="60">60KG</option>
                            <option value="61">61KG</option>
                            <option value="62">62KG</option>
                            <option value="63">63KG</option>
                            <option value="64">64KG</option>
                            <option value="65">65KG</option>
                            <option value="66">66KG</option>
                            <option value="67">67KG</option>
                            <option value="68">68KG</option>
                            <option value="69">69KG</option>
                            <option value="70">70KG</option>
                            <option value="71">71KG</option>
                            <option value="72">72KG</option>
                            <option value="73">73KG</option>
                            <option value="74">74KG</option>
                            <option value="75">75KG</option>
                            <option value="76">76KG</option>
                            <option value="77">77KG</option>
                            <option value="78">78KG</option>
                            <option value="79">79KG</option>
                            <option value="80">80KG</option>
                            <option value="81">81KG</option>
                            <option value="82">82KG</option>
                            <option value="83">83KG</option>
                            <option value="84">84KG</option>
                            <option value="85">85KG</option>
                            <option value="86">86KG</option>
                            <option value="87">87KG</option>
                            <option value="88">88KG</option>
                            <option value="89">89KG</option>
                            <option value="90">90KG</option>
                            <option value="91">91KG</option>
                            <option value="92">92KG</option>
                            <option value="93">93KG</option>
                            <option value="94">94KG</option>
                            <option value="95">95KG</option>
                            <option value="96">96KG</option>
                            <option value="97">97KG</option>
                            <option value="98">98KG</option>
                            <option value="99">99KG</option>
                            <option value="100">100KG</option>
                            <option value="101">101KG</option>
                            <option value="102">102KG</option>
                            <option value="103">103KG</option>
                            <option value="104">104KG</option>
                            <option value="105">105KG</option>
                            <option value="106">106KG</option>
                            <option value="107">107KG</option>
                            <option value="108">108KG</option>
                            <option value="109">109KG</option>
                            <option value="110">110KG</option>
                            <option value="111">111KG</option>
                            <option value="112">112KG</option>
                            <option value="113">113KG</option>
                            <option value="114">114KG</option>
                            <option value="115">115KG</option>
                            <option value="116">116KG</option>
                            <option value="117">117KG</option>
                            <option value="118">118KG</option>
                            <option value="119">119KG</option>
                            <option value="120">120KG</option>
                            <option value="121">121KG</option>
                            <option value="122">122KG</option>
                            <option value="123">123KG</option>
                            <option value="124">124KG</option>
                            <option value="125">125KG</option>
                            <option value="126">126KG</option>
                            <option value="127">127KG</option>
                            <option value="128">128KG</option>
                            <option value="129">129KG</option>
                            <option value="130">130KG</option>
                            <option value="131">131KG</option>
                            <option value="132">132KG</option>
                            <option value="133">133KG</option>
                            <option value="134">134KG</option>
                            <option value="135">135KG</option>
                            <option value="136">136KG</option>
                            <option value="137">137KG</option>
                            <option value="138">138KG</option>
                            <option value="139">139KG</option>
                            <option value="140">140KG</option>
                            <option value="141">141KG</option>
                            <option value="142">142KG</option>
                            <option value="143">143KG</option>
                            <option value="144">144KG</option>
                            <option value="145">145KG</option>
                            <option value="146">146KG</option>
                            <option value="147">147KG</option>
                            <option value="148">148KG</option>
                            <option value="149">149KG</option>
                            <option value="150">150KG</option>
                        </select>
                        <p><label f="but_cond_multi_confirm" data-id1="s_sweight" data-id2="s_eweight" data-tid="s_weight_text" data-tips="体重" data-box="s_weight_box">确定</label></p>
                    </div>
                </div>
                <div class="btn_1" f="but_search_cond_user"><i></i>搜索</div>
                <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='index.php?c=user&a=advsearch';" />
            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>

<div class="n_search_top" style="display:none;">
    <form method="post" action="index.php?c=user&a=list" id="search_normal">
        <div class="search_in">
            <i class="icon"></i>
            找:
            <select name='s_sex' id='s_sex'>
                <option value='0'>=不限=</option>
                <option value='2'>女会员</option>
                <option value='1'>男会员</option>
            </select>
            &nbsp;年龄:
            <select name='s_sage' id='s_sage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
            <span>~</span>
            <select name='s_eage' id='s_eage'><option value=''>不限</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option><option value='51'>51</option><option value='52'>52</option><option value='53'>53</option><option value='54'>54</option><option value='55'>55</option><option value='56'>56</option><option value='57'>57</option><option value='58'>58</option><option value='59'>59</option><option value='60'>60</option></select>
            &nbsp;地区:
            <select name='s_dist1' id='s_dist1' onchange="fetch_city('s_dist1', 's_dist2', '0', '=请选择=', '1', 's_dist3', '0');"><option value=''>=请选择=</option><option value='1'>北京</option><option value='3'>天津</option><option value='5'>上海</option><option value='7'>重庆</option><option value='9'>广东</option><option value='33'>江苏</option><option value='57'>浙江</option><option value='85'>福建</option><option value='98'>湖南</option><option value='122'>湖北</option><option value='152'>山东</option><option value='177'>辽宁</option><option value='198'>吉林</option><option value='218'>云南</option><option value='233'>四川</option><option value='252'>安徽</option><option value='271'>江西</option><option value='286'>黑龙江</option><option value='306'>河北</option><option value='326'>陕西</option><option value='336'>海南</option><option value='342'>河南</option><option value='362'>山西</option><option value='374'>内蒙古</option><option value='392'>广西</option><option value='405'>贵州</option><option value='416'>宁夏</option><option value='421'>青海</option><option value='427'>新疆</option><option value='445'>西藏</option><option value='449'>甘肃</option><option value='463'>台湾</option><option value='469'>香港</option><option value='471'>澳门</option><option value='473'>国外</option><option value='475'>其他</option></select>&nbsp;
            <span id="json_s_dist2">
            <select name="s_dist2" id="s_dist2"><option value="0">=请选择=</option></select>
          </span>&nbsp;
            <span id="json_s_dist3">
            <select name="s_dist3" id="s_dist3"><option value="0">=请选择=</option></select>
          </span>&nbsp;
            婚史:<select name='s_marry' id='s_marry'><option value=''>=不限=</option><option value='1'>未婚</option><option value='2'>已婚</option><option value='3'>离异</option><option value='4'>丧偶</option></select>&nbsp;
            <input type="checkbox" value="1" name="s_avatar" id="s_avatar" />
            <label for="s_p_img">有头像</label>
            &nbsp;&nbsp;
            <input type="submit" value="搜索" name="btn_search" id="btn_search" class="n_search_btn" />&nbsp;
            <input type="button" value="高级搜索" name="btn_advsearch" id="btn_advsearch" class="n_advsearch_btn" onclick="window.location.href='index.php?c=user&a=advsearch';" />
            &nbsp;&nbsp;
        </div>
    </form>
</div>
<div class="oe_diary_list">
    <div class="left">
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162030/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/33.html" class="tit" target="_blank" title="爱的方式">  爱的方式 </a> <span>[婚恋课堂]</span></h3>
                <p class="text">
                    人们常说：理解万岁，换位思考，但真正做起来并不容易。 尤其在爱情方面，尤其是处于恋爱初期阶段的男女。两个陌生人，不同的生活方式、成长环境，在相互并不了解的基础上
                </p>
                <p class="time">
                    <span>【<a href="home/162030" target="_blank">妮子123</a>】 <i></i>2013-09-05</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162322/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/32.html" class="tit" target="_blank" title="真爱一生能有几回">  真爱一生能有几回 </a> <span>[文学随笔]</span></h3>
                <p class="text">
                    有人说，人一辈子只能爱一次，真的爱过之后就失去了爱的能力，对爱情冷漠，麻木了。常有人因为没有爱而心伤，殊不知这也只是心伤而已，还并不可悲。可悲的是，当爱来临的时
                </p>
                <p class="time">
                    <span>【<a href="home/162322" target="_blank">蓝精灵</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162324/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/31.html" class="tit" target="_blank" title="好女孩是这样的">  好女孩是这样的 </a> <span>[文学随笔]</span></h3>
                <p class="text">
                    1．善良，懂百善孝为先。绝不会问“我和你妈掉河里，你先救谁？” 这根本就不是人话！  　　2．贤惠，知这是亘古不变的女性美德。  　　3．知书达礼，具备新时期对
                </p>
                <p class="time">
                    <span>【<a href="home/162324" target="_blank">宝宝</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162333/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/30.html" class="tit" target="_blank" title="有一种单身只是为了等待一个人">  有一种单身只是为了等待一个人 </a> <span>[文学随笔]</span></h3>
                <p class="text">
                    有一种单身，只是为了等待一个人，等那一个该等的人。不是不想告别单身，不是想一直做光棍，只是为了那份情、那份爱、那个一直在心底的人，而甘心静静的选择一个人生活。
                </p>
                <p class="time">
                    <span>【<a href="home/162333" target="_blank">寻你一起幸福</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162336/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/29.html" class="tit" target="_blank" title="爱的方式">  爱的方式 </a> <span>[生活点滴]</span></h3>
                <p class="text">
                    人们常说：理解万岁，换位思考，但真正做起来并不容易。 　　尤其在爱情方面，尤其是处于恋爱初期阶段的男女。两个陌生人，不同的生活方式、成长环境，在相互并不了解的基
                </p>
                <p class="time">
                    <span>【<a href="home/162336" target="_blank">妲己</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162334/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/28.html" class="tit" target="_blank" title="一个女孩子从5岁到35岁的爱情感悟">  一个女孩子从5岁到35岁的爱情感悟 </a> <span>[生活点滴]</span></h3>
                <p class="text">
                    我一直想找一个理想的男友，结果总是很郁闷。  　　5岁时，我喜欢一个叫仔仔的男生，他有两颗虎牙不算，当他手里有 两个红橘的时候，他会把那个大的给我吃。现在我再遇
                </p>
                <p class="time">
                    <span>【<a href="home/162334" target="_blank">王小七</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162304/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/27.html" class="tit" target="_blank" title="爱与不爱都快乐">  爱与不爱都快乐 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    人的生活方式有很多种，婚姻只是诸多生活方式中的一种。哪种方式让你觉得自在愉悦，那么就是最适合你的。所谓剩女，只是一群爱情理想主义者，她们对爱情的品质要求更高，原
                </p>
                <p class="time">
                    <span>【<a href="home/162304" target="_blank">spring</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162310/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/26.html" class="tit" target="_blank" title="让老公更爱你的必杀技">  让老公更爱你的必杀技 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    1.老公是拿来爱的，不是拿来气的。爱老公就是爱自己。 　　2.老公想吃苹果时马上就去洗。经验证明推来推去的结果不仅有伤和气，而且所消耗的时间和能量已经能洗完苹果
                </p>
                <p class="time">
                    <span>【<a href="home/162310" target="_blank">贝雯雯</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162316/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/25.html" class="tit" target="_blank" title="没能力爱对方 请别选择再婚">  没能力爱对方 请别选择再婚 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    不经一番寒彻骨，哪得梅花扑鼻香。 　　历经了失败婚姻的洗礼，更懂得珍惜婚姻家庭的甜蜜。 　　虽说再婚难，如果我们以诚心相待，缘分圆了，选择对了彼此适合的人，再婚
                </p>
                <p class="time">
                    <span>【<a href="home/162316" target="_blank">松露巧克力</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162326/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/24.html" class="tit" target="_blank" title="切莫背负感情的债">  切莫背负感情的债 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    惊闻同事教育年幼的女儿：长大一定要嫁有钱人。韵竹鄂然...... 韵竹在优越的环境中生长,对钱的概念历来模糊,虽在银行工作，却不懂理财，是名副其实的“月光”族，
                </p>
                <p class="time">
                    <span>【<a href="home/162326" target="_blank">jojo</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162329/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/23.html" class="tit" target="_blank" title="单身最大的好处是什么？">  单身最大的好处是什么？ </a> <span>[情感物语]</span></h3>
                <p class="text">
                    恢复单身，一个人。你的床上依然放着两个枕，你告诉自己已习惯了，或者，不敢拆穿自己的，是潜意识里不忍心亲手拿走他也许还会回来的遐想。 这种日子不能长久。要回来的不
                </p>
                <p class="time">
                    <span>【<a href="home/162329" target="_blank">金小静</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162305/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/22.html" class="tit" target="_blank" title="放弃是对爱情的另一种成全">  放弃是对爱情的另一种成全 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    爱上一个人不需要勇气，但是放弃一个爱上的人却需要很大的勇气。当你爱上一个人的时候，他仿佛已经根植在自己的心房了。放弃他，无疑仿佛将自己的心也挖出来。可是他不爱你
                </p>
                <p class="time">
                    <span>【<a href="home/162305" target="_blank">飘飘</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162332/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/21.html" class="tit" target="_blank" title="重复的心语~我想你了">  重复的心语~我想你了 </a> <span>[情感物语]</span></h3>
                <p class="text">
                    绵绵的情意感天动地 ，颤抖的音韵一醉而醉； 心上的人儿你在哪里？ 云儿开路，花儿动容，呼唤的回荡响彻天际！ 心上的人儿你在哪里？ 想你的心，时时刻刻； 心上的人
                </p>
                <p class="time">
                    <span>【<a href="home/162332" target="_blank">贝贝Sky</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162216/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/20.html" class="tit" target="_blank" title="爱是一种委曲求全的忍让">  爱是一种委曲求全的忍让 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    一个女孩子，非常好的人，性格平顺，也善良贤惠，外表长的一般，虽不算大美女，但也是清秀。工作也算好，平日里除了上班，就喜欢做饭，可谓是男人喜欢的类型。 　　这女孩
                </p>
                <p class="time">
                    <span>【<a href="home/162216" target="_blank">贝贝</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162293/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/19.html" class="tit" target="_blank" title="你信么">  你信么 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    聪明的女人总会拥有幸福，因为她们懂得如何处理与男人的关系，懂得什么时候给男人面子，什么时候要表现得大度。 　　情景一：和老公到朋友开的酒吧小坐，有一个22岁的美
                </p>
                <p class="time">
                    <span>【<a href="home/162293" target="_blank">Lanlan</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162325/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/18.html" class="tit" target="_blank" title="感情真的跟缘分有关吗">  感情真的跟缘分有关吗 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    从前，有一座圆音寺，每天都有许多人上香拜佛，香火很旺。在圆音寺庙前的横梁上有个蜘蛛结了张网，由于每天都受到香火和虔诚的祭拜的熏托，蛛蛛便有了佛性。经过了一千多年
                </p>
                <p class="time">
                    <span>【<a href="home/162325" target="_blank">笨笨</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162312/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/17.html" class="tit" target="_blank" title="爱的能力">  爱的能力 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    爱是上帝（自然）赐予的最美好的礼物。 两个家庭中长大的陌生男女短时间相知相爱，并且要相伴一生，还有什么比这更能体现造化的神奇。 谁能让两颗灵魂弥合的天衣无缝，随
                </p>
                <p class="time">
                    <span>【<a href="home/162312" target="_blank">苏景嫣</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162320/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/16.html" class="tit" target="_blank" title="珍惜你的爱情幸福才会开花">  珍惜你的爱情幸福才会开花 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    夜晚，因为有了星星，才变得美丽；人生，因为有了爱情，生命才精彩，那么请珍惜你的爱情，幸福才会花开。 当爱情褪去了颜色，才想再拥有，已没有任何意义，更没有任何价值
                </p>
                <p class="time">
                    <span>【<a href="home/162320" target="_blank">浅颜</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162340/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/15.html" class="tit" target="_blank" title="美丽的花朵需要爱的滋润">  美丽的花朵需要爱的滋润 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    天使折翅堕落凡尘，美丽而忧伤，其对人间的奉献，却得不到世人的理解！为何你眼里满含泪水，因为你也曾经爱得深沉。 天使折翅堕落凡尘，美丽而忧伤，其对人间的奉献，却得
                </p>
                <p class="time">
                    <span>【<a href="home/162340" target="_blank">生活</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>
        <dl>
            <dt>
                <span><img src="data/attachment/avatar/201301/22/162147/avatar_big.jpg.thumb.jpg" alt="" /></span>
            </dt>
            <dd>
                <h3><a href="diary/14.html" class="tit" target="_blank" title="若要情长久，真心换真心">  若要情长久，真心换真心 </a> <span>[两性私语]</span></h3>
                <p class="text">
                    缘是长久的相聚，趁着擦肩而过的朋友不多，趁着生命中的轻舞飞扬还没飞远，把握每一份缘份.朋友相识就是缘 ,漫漫长路需要结伴而行，相知才能天长地久 。
                </p>
                <p class="time">
                    <span>【<a href="home/162147" target="_blank">小欣</a>】 <i></i>2013-01-22</span>
                </p>
            </dd>
            <div class="clear"></div>
        </dl>

        <div class="pagecode"><a href="index.php?c=diary&a=list&amp;page=1" class='on'>1</a><a href="index.php?c=diary&a=list&amp;page=2">2</a><a href="index.php?c=diary&a=list&amp;page=2" class='end'>下一页</a></div>
    </div>
    <div class="right">
        <div class='listtype'>
            <a href="index.php?c=diary&a=list" class='current'>全部日记</a>
            <a href="index.php?c=diary&a=list&cid=1">婚恋课堂</a>
            <a href="index.php?c=diary&a=list&cid=2">爱情故事</a>
            <a href="index.php?c=diary&a=list&cid=3">两性私语</a>
            <a href="index.php?c=diary&a=list&cid=4">情感物语</a>
            <a href="index.php?c=diary&a=list&cid=5">生活点滴</a>
            <a href="index.php?c=diary&a=list&cid=6">文学随笔</a>
            <a href="index.php?c=diary&a=list&cid=7">其他日志</a>
        </div>
        <div class="hot_diary">
            <h3><i>热门日记</i></h3>
            <ul>
                <li><i></i><a target="_blank" href="diary/31.html">好女孩是这样的</a> </li>
                <li><i></i><a target="_blank" href="diary/5.html">爱情的领悟</a> </li>
                <li><i></i><a target="_blank" href="diary/13.html">关于爱情婚姻</a> </li>
                <li><i></i><a target="_blank" href="diary/27.html">爱与不爱都快乐</a> </li>
                <li><i></i><a target="_blank" href="diary/24.html">切莫背负感情的债</a> </li>
                <li><i></i><a target="_blank" href="diary/32.html">真爱一生能有几回</a> </li>
                <li><i></i><a target="_blank" href="diary/12.html">没有物质的婚姻怎能付得起责任？</a> </li>
                <li><i></i><a target="_blank" href="diary/33.html">爱的方式</a> </li>
                <li><i></i><a target="_blank" href="diary/1.html">忘记过去，重拾未来</a> </li>
                <li><i></i><a target="_blank" href="diary/2.html">转角是幸福</a> </li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>

@stop