<?php
$this->breadcrumbs=array(
	'商品信息',
);
?>
<div class="list-view">
	<div class="title first">
		<h2>稀奇创意产品推荐</h2>
		<p class="more"><a title="创意产品网-稀奇购" href="http://www.xiqigou.com">创意产品</a></p>
	</div>
	<div class="classname">
    	<a title="淘宝创意产品" href="/tb_goods/"><span class="classname_all">淘宝创意产品</span></a>：<a title="淘宝办公文具" href="/office/taobao/">办公文具</a> | <a title="淘宝家居厨卫" href="/household/taobao/">家居厨卫</a> | <a title="淘宝创意小产品" href="/creative/taobao/">创意小产品</a> | <a title="淘宝电脑创意" href="/computer/taobao/">电脑创意</a> | <a title="淘宝数码创意" href="/digital/taobao/">数码创意</a> | <a title="淘宝创意家电" href="/appliance/taobao/">创意家电</a>
   </div>


	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>

</div>

