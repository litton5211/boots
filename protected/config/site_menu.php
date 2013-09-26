<?php
	return array(
		'文章管理'=>array(
						array('label'=>'文章列表', 'url'=>array('/admin/post/admin', 'menu_type'=>12), 'itemOptions'=>array('class'=>'parent'),),
						array('label'=>'新增文章', 'url'=>array('/admin/post/create', 'menu_type'=>13),'itemOptions'=>array('class'=>'parent'),),
						),
		'客户端管理'=>array(
						array('label'=>'新增客户端', 'url'=>array('/clientInfo/create', 'menu_type'=>12), 'itemOptions'=>array('class'=>'parent'),),
						array('label'=>'维护客户端', 'url'=>array('/clientInfo/admin', 'menu_type'=>13),'itemOptions'=>array('class'=>'parent'), ),
						),
		'通讯日志管理'=>array(
						array('label'=>'日志查询', 'url'=>array('/connectLog/admin', 'menu_type'=>13),'itemOptions'=>array('class'=>'parent'), ),
						),
		'用户资料管理'=>array(
						array('label'=>'个人密码修改', 'url'=>array('/user/changePwd', 'menu_type'=>12), 'itemOptions'=>array('class'=>'parent'),),
						array('label'=>'新增操作员', 'url'=>array('/user/create', 'menu_type'=>12), 'itemOptions'=>array('class'=>'parent'),),
						array('label'=>'操作员维护', 'url'=>array('/user/admin', 'menu_type'=>13),'itemOptions'=>array('class'=>'parent'), ),
						),
	);
?>