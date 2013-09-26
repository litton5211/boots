 <div class="bodytop">	
 	<!-- 首页导航开始 -->
	 <DIV class="home_nav">
	 	<DIV style="DISPLAY: block" id=__ddnav_sort class=newhomepage_sort >
			<UL>
			<?php foreach($goodsSort as $sort):?>
			  <LI id=li_label_1>
				  <H2 id=categoryh_1 ><A class=label 
				  href="http://book.dangdang.com/"><SPAN 
				  class=icon_book><?php echo $sort->SortName?></SPAN></A>
				  </H2>
			  </LI>
			  <?php endforeach ?>
				  
				<DIV class=newhomepage_sort_bottom></DIV>
			</UL>
		</DIV>
	</DIV>
	<!-- 首页导航结束 -->
		 <?php echo Yii::app()->clientScript->registerCoreScript('jquery'); ?>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
		 <div id="container">
		<div id="example">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
			<div id="slides">
				<div class="slides_container">
					<?php foreach ($goodsTop as $goods){?>
					<div class="slide">
						<a href="<?php echo $goods->taoke_url?>" title="<?php echo $goods->title?>" target="_blank"><img src="<?php echo $goods->pic_url; ?>" width="570" height="210" alt="Slide 1"></a>
						<div class="caption" style="bottom:0">
							<p><?php echo $goods->title?></p>
						</div>
					</div>
					<?php };?>
				</div>
			
			</div>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/example-frame.png" width="742" height="341" alt="Example Frame" id="frame">
		</div>
	</div>

	<DIV class=homepage_callboard>
		<DIV id=__F class=homepage_callboard_cycle>
				<H2 id=gonggao class=nonce onmousemove="showhidediv(this.id,'gonggao_content','news','service','news_content','service_content')">公告</H2>
				<H2 id=news onmousemove="showhidediv(this.id,'news_content','gonggao','service','gonggao_content','service_content')">新闻</H2>
				<H2 id=service class=h2_other onmousemove="showhidediv(this.id,'service_content','news','gonggao','news_content','gonggao_content')">最新服务</H2>
				
				<DIV class=clear></DIV>
				
				<DIV id=gonggao_content>
						<P><A href="http://support.dangdang.com/helpcenter/email_contact.php#ref=www-0-F" target=_blank><IMG alt=联系客服 src="dangdang_files/f1_100831.jpg"></A></P>
						<UL class=ul_other>
						  <LI class=hot><A title=点击消费2011活动开始  href="http://static.dangdang.com/topic/744/193005.shtml#ref=www-0-F"  target=_blank>点击消费2011活动开始</A></LI>
						  <LI><A title=订单延迟公告 href="http://blog.dangdang.com/?p=7997#ref=www-0-F" target=_blank>订单延迟公告</A></LI>
						  <LI><A title=自登陆猜域名获奖名单 href="http://blog.dangdang.com/?p=8016#ref=www-0-F" target=_blank>自登陆猜域名获奖名单</A></LI>
						</UL>
				</DIV>
			
				<UL style="DISPLAY: none" id=news_content class=ul_all>
				  <LI class=hot><A title=当当网采购大会通知 href="http://static.dangdang.com/topic/744/192595.shtml#ref=www-0-F"  target=_blank>当当网采购大会通知</A></LI>
				  <LI><A title="净化网购环境 抵制假冒侵权" href="http://static.dangdang.com/topic/744/189232.shtml#ref=www-0-F"  target=_blank>净化网购环境 抵制假冒侵权</A></LI>
				  <LI><A title=假冒当当客服诈骗的声明 href="http://blog.dangdang.com/?p=6563#ref=www-0-F"   target=_blank>假冒当当客服诈骗的声明</A></LI>
				</UL>
				
				<DIV style="DISPLAY: none" id=service_content>
					<P><A href="http://misc.dangdang.com/gifts/index.aspx#ref=www-0-F" target=_blank><IMG alt=积分兑换社区 src="dangdang_files/f3_101206x.jpg"></A></P>
					<UL class=ul_other>
					  <LI class=hot><A title=新版服装馆前来报到！ href="http://blog.dangdang.com/?p=8009#ref=www-0-F" target=_blank>新版服装馆前来报到！</A></LI>
					  <LI><A title=新版玩具文具馆欢迎您 href="http://blog.dangdang.com/?p=7867#ref=www-0-F" target=_blank>新版玩具文具馆欢迎您</A></LI>
					  <LI><A title=用手机也能买商家商品 href="http://blog.dangdang.com/?p=7824#ref=www-0-F" target=_blank>用手机也能买商家商品</A></LI>
					</UL>
				</DIV>
				
		</DIV>
		<DIV id=__D class=homepage_callboard_pic>
			<A id=pic_left onmouseup=ISL_StopUp_1() class=left onmouseout=ISL_StopUp_1() onmousedown=ISL_GoUp_1() href="javascript:void(0);">left</A> 
			<DIV id=ISL_Cont_1 class=pcont>
				<DIV class=ScrCont><!-- piclist begin -->
					<DIV id=List1_1>
						<A class=pic href="http://static.dangdang.com/topic_custom/store/2273_192499.shtml#ref=www-0-D" target=_blank>
						<IMG alt="当当亲子团 团购更超值" src="dangdang_files/ddqzt_szh110603.jpg" width=151 height=60></A> 
					</DIV>
					<DIV id=List2_1></DIV>
				</DIV>
			</DIV>
			<A id=pic_right onmouseup=ISL_StopDown_1() class=right onmouseout=ISL_StopDown_1() onmousedown=ISL_GoDown_1() href="javascript:void(0);">right</A> 
		</DIV>
		<!--公告结束-->
	</DIV>
	<div class="promotion">
		<ul class="shop-list6">
		<?php foreach ($goodsHead as $head){?>
			<li>
				<a target="_blank" href="<?php echo $head->taoke_url;?>">
					<img height="150" width="190" border="0" alt="<?php echo $head->title;?>" src="<?php echo $head->pic_url;?>">
				</a>
				<p><?php echo $head->title;?></p>
			</li>
		<?php }?>
		</ul>
	</div>

</div>
<!-- 首页创意资讯信息 -->
<div class="w1000 b_blue1">
	<div class="b_white1 blue_nr01">
		<p class="bijia_more"><span class="blue_nr_title">大家喜欢的优惠券 &amp; 打折促销信息</span></p>
		<div class="clear"></div>
		  <span class="ad06_mk l">
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7653.html"><img height="222" border="0" width="220" src="http://img1.xungou.com/Recommend/201106241524/2011062415241995599.jpg"></a></span>
		 <dl class="ad06">
		<dt>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2403/"><img height="97" width="215" src="http://img1.xungou.com/Recommend/201106131013/2011061310131852740.jpg"></a></dt>
		<dd>
		 <a class="blue" target="_blank" href="http://tuangou.xungou.com/duoyi/">[朵颐网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2561/">朵颐网5元全场无限制优惠券</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/zoshow/">[走秀网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2542/">走秀网15元无限制优惠券</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/zhongguolingshiwang/">[中国零食网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2541/">中国零食网10元优惠券</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/keede/">[可得眼镜]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2081/">可得眼镜25元优惠券</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/haojiafang/">[好家纺]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/coupon-2464/">好家纺购物满300减50优惠券</a></dd>
		</dl>
		 <dl class="ad06">
		<dt>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7692.html"><img height="97" width="215" src="http://img1.xungou.com/Recommend/201106281351/2011062813510226203.jpg"></a></dt>
		<dd>
		 <a class="blue" target="_blank" href="http://club.xungou.com/forum-244-1.html">[麦当劳]</a>
		 <a target="_blank" href="http://club.xungou.com/thread-852822-1-1.html">麦当劳最新优惠券免费领取</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://club.xungou.com/forum-244-1.html">[肯德基]</a>
		 <a target="_blank" href="http://club.xungou.com/thread-851858-1-1.html">肯德基最新优惠券免费领取</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://club.xungou.com/forum-244-1.html">[DQ]</a>
		 <a target="_blank" href="http://club.xungou.com/thread-851876-1-1.html">DQ冰淇淋最新优惠券免费领取</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://club.xungou.com/forum-244-1.html">[呷哺呷哺]</a>
		 <a target="_blank" href="http://club.xungou.com/thread-851797-1-1.html">呷哺呷哺优惠券免费领取</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://club.xungou.com/forum-244-1.html">[东方既白]</a>
		 <a target="_blank" href="http://club.xungou.com/thread-848693-1-1.html">东方既白优惠券免费领取</a></dd>
		</dl>
		 <dl class="ad06">
		<dt>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7485.html"><img height="97" width="215" src="http://img1.xungou.com/Recommend/201106271708/2011062717082871402.jpg"></a></dt>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/letao/">[乐淘网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7592.html">愤怒小鸟潮流鞋疯狂价89元</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/vancl/">[凡客诚品]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7613.html">仲夏盛促1折起全场免运费</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/togj/">[逛街网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7478.html">孤品清仓 跳楼价8元起！</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/360buy/">[京东商城]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7516.html">京东618 5折疯抢红六月</a></dd>
		<dd>
		 <a class="blue" target="_blank" href="http://shop.xungou.com/dangdang/">[当当网]</a>
		 <a target="_blank" href="http://zhekou.xungou.com/zhekou-7672.html">贺美妆新版上线 全场大牌4折起</a></dd>
		</dl>
		<div class="clear">
		 </div>
		 </div>
</div>
<div class="clear10"></div>





<div class="w1000 b_blue1">
	<div class="b_white1 blue_nr01">
   	  <p class="bijia_more"><span class="blue_nr_title">大家的购物话题</span><span class="blue_nr_more"><a class="blue" target="_blank" href="http://club.xungou.com/">更多&gt;&gt;</a></span></p>
   	  
<div class="clear"></div>
         <span class="ad06_mk l"><a target="_blank" href="http://club.xungou.com/thread-852120-1-1.html"><img height="301" border="0" width="220" src="http://club.xungou.com/upimg/2011-06-03/201106031051317529471.jpg"></a></span>
         
         <div class="ad07">
         	<span class="l ad07_sp"><a target="_blank" href="http://club.xungou.com/thread-851449-1-1.html"><img height="170" border="0" width="130" src="http://club.xungou.com/upimg/2011-05-30/201105301019471688999.jpg"></a></span>
            <dl class="ad07_dl">
            	<dt><a target="_blank" href="http://club.xungou.com/thread-851449-1-1.html">厚底凉鞋Fashion进行时</a></dt>
                                <dd><a target="_blank" href="http://club.xungou.com/thread-848599-1-1.html">香奈儿派对备战戛纳电影节</a></dd>
             		                <dd><a target="_blank" href="http://club.xungou.com/thread-848812-1-1.html">最IN的9款比基尼你敢穿吗？</a></dd>
             		                <dd><a target="_blank" href="http://club.xungou.com/thread-848501-1-1.html">刘亦菲范冰冰穿衣有点“黄”～</a></dd>
             		                <dd><a target="_blank" href="http://club.xungou.com/thread-848657-1-1.html">心酸泪史“她”让我继续坚挺</a></dd>
             		                <dd><a target="_blank" href="http://club.xungou.com/thread-848094-1-1.html">MM们,敢秀出你们的三围么？</a></dd>
             		                <dd><a target="_blank" href="http://club.xungou.com/thread-848093-1-1.html">大家来拼单，看我韩国网购的鞋子！</a></dd>
             		            </dl>
         </div>
         <div class="ad07">
         	<span class="l ad07_sp"><a target="_blank" href="http://club.xungou.com/thread-851739-1-1.html"><img height="170" width="130" src="http://club.xungou.com/upimg/2011-05-31/201105311413537030994.jpg"></a></span>
            <dl class="ad07_dl">
            	<dt><a target="_blank" href="http://club.xungou.com/thread-851739-1-1.html">六月裤装迷人搭配~最美</a></dt>
            		                <dd><a target="_blank" href="http://club.xungou.com/thread-853270-1-1.html">雪纺单品夏季热搭清爽又够美</a></dd>
								                <dd><a target="_blank" href="http://club.xungou.com/thread-855335-1-1.html">今夏就要甜辣混搭加点小性感</a></dd>
								                <dd><a target="_blank" href="http://club.xungou.com/thread-852028-1-1.html">夏天着清凉衣衣如何防走光？</a></dd>
								                <dd><a target="_blank" href="http://club.xungou.com/thread-850660-1-1.html">马尔代夫哪款比基尼性感养眼</a></dd>
								                <dd><a target="_blank" href="http://club.xungou.com/thread-852147-1-1.html">无袖衫清凉又扮靓潮人必buy</a></dd>
								                <dd><a target="_blank" href="http://club.xungou.com/thread-850854-1-1.html">2011夏日指甲油颜色购买指南</a></dd>
								            </dl>
         </div>
       <div style="height:1px;overflow:hidden;width:700px;" class="l"></div>
         <div class="ad07">
         	<ul class="ad07_ul">
         		            	<li><span><a target="_blank" href="http://club.xungou.com/forum-222-1.html">[晒图体验]</a></span><a target="_blank" href="http://club.xungou.com/thread-855659-1-1.html">簋街独门冲牛蛙</a></li>
						            	<li><span><a target="_blank" href="http://club.xungou.com/forum-233-1.html">[穿衣搭配]</a></span><a target="_blank" href="http://club.xungou.com/thread-855728-1-1.html">平民王妃帽子法</a></li>
						            	<li><span><a target="_blank" href="http://club.xungou.com/forum-248-1.html">[购物晒单]</a></span><a target="_blank" href="http://club.xungou.com/thread-855817-1-1.html">用积分换的碗 很可爱</a></li>
						            	<li><span><a target="_blank" href="http://club.xungou.com/forum-68-1.html">[当当购物]</a></span><a target="_blank" href="http://club.xungou.com/thread-851818-1-1.html">晒当当网购物的第一单</a></li>
						            </ul>
         </div>
         <div class="ad07">
         	<ul class="ad07_ul">
         		            <li><span><a target="_blank" href="http://club.xungou.com/forum-248-1.html">[购物晒单]</a></span><a target="_blank" href="http://club.xungou.com/thread-855815-1-1.html">刚入手白菜价内存</a></li>
						            <li><span><a target="_blank" href="http://club.xungou.com/forum-233-1.html">[穿衣搭配]</a></span><a target="_blank" href="http://club.xungou.com/thread-855749-1-1.html">开启浪漫优雅之约,女装新款2011夏装</a></li>
						            <li><span><a target="_blank" href="http://club.xungou.com/forum-234-1.html">[美容护肤]</a></span><a target="_blank" href="http://club.xungou.com/thread-852036-1-1.html">做了头发之后他们说我小了10岁</a></li>
						            <li><span><a target="_blank" href="http://club.xungou.com/forum-233-1.html">[穿衣搭配]</a></span><a target="_blank" href="http://club.xungou.com/thread-855879-1-1.html">推荐三款最为流行的连衣裙</a></li>
						            </ul>
         </div>
      <div class="clear"></div> 
    </div>
</div>





  <div class="clr"></div>
  
  
  
  <div class="w1000 b_blue1">
	<div class="b_white1 blue_nr01">
   	  <p class="bijia_more"><span class="blue_nr_title">大家参与的团购活动</span><span class="blue_nr_more"><a class="blue" target="_blank" href="http://tuangou.xungou.com/">更多团购&gt;&gt;</a></span></p>
   	  <div class="clear"></div>
	  <div class="w1000 overh">
        <!--团购列表-->
        <input type="hidden" id="tgid" value="1845639,1762126,1858083,1798517,1813713,1713633,1766626,1806657">
    	<ul id="listtgid" class="tuan_goods"> 
    		<li onmouseover="disptime(1762126)" onmouseout="hidtime(1762126)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/meituan/prod-1762126.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_06_29/5445/beijing/2039CE1275187FBF833897249D0A87A2_0.9_0.4_4.4_8F4AA3B5C5D098BB3E0B1F9EA7C33F21/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/meituan/">【美团】</a></b><a target="_blank" href="http://tuangou.xungou.com/meituan/prod-1762126.html">仅售0.4元！原价0.9元的天露圣品西域丝路香酥鹰嘴豆1袋（5种口味，任意2种随机发送），50袋起购，50袋起包邮。西域风情，丝路文化，香酥鹰嘴豆，一酥在口，飘香久久，美味触手可及~</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1762126" value="2011-07-02 23:59:59"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥.4</b></li><li>原价：<i>￥.9</i></li><li>折扣：<b>4.4</b> 折</li><li>已售出<span id="priceid1762126">218774</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1762126&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1858083)" onmouseout="hidtime(1858083)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_07_02/8401/quanguo/3D3EC2ECF5589E163711EE5D79823CF7_185.0_79.0_4.27_DD93BB3099345C3C5C9D86C41E766B93/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/">【如愿团】</a></b><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html">专柜正品仅售79元，在BB霜，可算是一款为数不多，在保养方面超级出色的一款！芭比这款BB霜香草强烈推荐！里面含有深海胶原蛋白非常珍贵，非常有效！既保湿增强皮肤含水量，又有超级强大的修复能力，和抗衰老作用！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1858083" value="2011-07-04 00:00:00"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥79</b></li><li>原价：<i>￥185</i></li><li>折扣：<b>4.27</b> 折</li><li>已售出<span id="priceid1858083">975</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1858083&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1798517)" onmouseout="hidtime(1798517)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_06_30/7841/beijing/97D172353EB021A7E697BC42D70D694B_100.0_58.0_5.8_67C84FE0D338ABC55B1EAC5152C53282/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/gaopeng/">【高朋团购】</a></b><a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html">仅58元！原价100元中国儿童少年地子自然体验基地单人套票，豆腐制作/白族扎染/古典造纸/陶艺制作/彩色蜡烛/石膏成像六选四，北京包邮！带孩子一起体验返璞归真的简单快乐！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1798517" value="2011-07-03 23:59:59"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥58</b></li><li>原价：<i>￥100</i></li><li>折扣：<b>5.8</b> 折</li><li>已售出<span id="priceid1798517">41</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1798517&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1762126)" onmouseout="hidtime(1762126)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/meituan/prod-1762126.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_06_29/5445/beijing/2039CE1275187FBF833897249D0A87A2_0.9_0.4_4.4_8F4AA3B5C5D098BB3E0B1F9EA7C33F21/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/meituan/">【美团】</a></b><a target="_blank" href="http://tuangou.xungou.com/meituan/prod-1762126.html">仅售0.4元！原价0.9元的天露圣品西域丝路香酥鹰嘴豆1袋（5种口味，任意2种随机发送），50袋起购，50袋起包邮。西域风情，丝路文化，香酥鹰嘴豆，一酥在口，飘香久久，美味触手可及~</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1762126" value="2011-07-02 23:59:59"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥.4</b></li><li>原价：<i>￥.9</i></li><li>折扣：<b>4.4</b> 折</li><li>已售出<span id="priceid1762126">218774</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1762126&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1858083)" onmouseout="hidtime(1858083)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_07_02/8401/quanguo/3D3EC2ECF5589E163711EE5D79823CF7_185.0_79.0_4.27_DD93BB3099345C3C5C9D86C41E766B93/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/">【如愿团】</a></b><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html">专柜正品仅售79元，在BB霜，可算是一款为数不多，在保养方面超级出色的一款！芭比这款BB霜香草强烈推荐！里面含有深海胶原蛋白非常珍贵，非常有效！既保湿增强皮肤含水量，又有超级强大的修复能力，和抗衰老作用！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1858083" value="2011-07-04 00:00:00"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥79</b></li><li>原价：<i>￥185</i></li><li>折扣：<b>4.27</b> 折</li><li>已售出<span id="priceid1858083">975</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1858083&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1798517)" onmouseout="hidtime(1798517)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_06_30/7841/beijing/97D172353EB021A7E697BC42D70D694B_100.0_58.0_5.8_67C84FE0D338ABC55B1EAC5152C53282/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/gaopeng/">【高朋团购】</a></b><a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html">仅58元！原价100元中国儿童少年地子自然体验基地单人套票，豆腐制作/白族扎染/古典造纸/陶艺制作/彩色蜡烛/石膏成像六选四，北京包邮！带孩子一起体验返璞归真的简单快乐！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1798517" value="2011-07-03 23:59:59"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥58</b></li><li>原价：<i>￥100</i></li><li>折扣：<b>5.8</b> 折</li><li>已售出<span id="priceid1798517">41</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1798517&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1858083)" onmouseout="hidtime(1858083)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_07_02/8401/quanguo/3D3EC2ECF5589E163711EE5D79823CF7_185.0_79.0_4.27_DD93BB3099345C3C5C9D86C41E766B93/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/">【如愿团】</a></b><a target="_blank" href="http://tuangou.xungou.com/ruyuantuan/prod-1858083.html">专柜正品仅售79元，在BB霜，可算是一款为数不多，在保养方面超级出色的一款！芭比这款BB霜香草强烈推荐！里面含有深海胶原蛋白非常珍贵，非常有效！既保湿增强皮肤含水量，又有超级强大的修复能力，和抗衰老作用！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1858083" value="2011-07-04 00:00:00"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥79</b></li><li>原价：<i>￥185</i></li><li>折扣：<b>4.27</b> 折</li><li>已售出<span id="priceid1858083">975</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1858083&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<li onmouseover="disptime(1798517)" onmouseout="hidtime(1798517)" class="l list">
    			<p class="pr">
    				<a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html"><img height="135" width="230" src="http://img0.xungou.com/tg/2011_06_30/7841/beijing/97D172353EB021A7E697BC42D70D694B_100.0_58.0_5.8_67C84FE0D338ABC55B1EAC5152C53282/220.jpg"></a>
    			</p>
    			<p class="tuan_goods_dc"><b class="tuannet"><a target="_blank" href="http://tuangou.xungou.com/gaopeng/">【高朋团购】</a></b><a target="_blank" href="http://tuangou.xungou.com/gaopeng/prod-1798517.html">仅58元！原价100元中国儿童少年地子自然体验基地单人套票，豆腐制作/白族扎染/古典造纸/陶艺制作/彩色蜡烛/石膏成像六选四，北京包邮！带孩子一起体验返璞归真的简单快乐！</a></p>
    			<p></p>
    			<div class="l tuan_goods_01"><input type="hidden" id="timertuangou1798517" value="2011-07-03 23:59:59"><ul class="tuan_goods_03"><li style=" line-height:28px;"><b class="f_arial">￥58</b></li><li>原价：<i>￥100</i></li><li>折扣：<b>5.8</b> 折</li><li>已售出<span id="priceid1798517">41</span>个</li></ul></div>
    			<div class="r tuan_goods_02"><p class="address"></p><p class="tc"><a target="_blank" href="http://goto.xungou.com/tgjump.php?proid=1798517&amp;type=7"><img height="27" border="0" width="81" src="/images/buy_bt.gif"></a></p></div>
    			<p></p>
    		</li> 
    		<div class="clear"></div>
    	</ul>
       	<div class="clear"></div>
        </div>
    </div>
</div>
