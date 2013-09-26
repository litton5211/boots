<?php $this->beginContent('/layouts/simple'); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
			<a href="/" class="brand">美妆宝典</a>
          	<div class="nav-collapse collapse">
          		<p class="navbar-text pull-right">
	              Logged in as <a class="navbar-link" href="#"><?php echo Yii::app()->user->id;?></a>
	            </p>
	            <ul class="nav">
	              <li class="active">
	                <a href="<?php echo Yii::app()->createUrl('admin/default/index');?>">首页</a>
	              </li>
	            </ul>
			</div>
		</div>
	</div>
</div>

<div class="container main">
	<div class="row">
		<div class="span3 ">
			<div class="well sidebar-nav left-nav-fixed">
				<h4>文章</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'分割线', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'文章管理', 'url'=>array('/admin/post/admin')), 
                            array('label'=>'新增文章', 'url'=>array('/admin/post/create')),
                            array('label'=>'视频管理', 'url'=>array('/admin/post/video')),                 
                        ),
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
				<h4>网友分享</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'首页', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'Products', 'url'=>array('/admin/share/admin')), 
                            array('label'=>'New Arrivals', 'url'=>array('/admin/post/index')),
                            array('label'=>'Most Popular', 'url'=>array('/product/index')),
                            array('label'=>'系统设置', 'url'=>array('/setting')),
                        ),
                        'itemCssClass'=>'ss',
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
                <h4>活动</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'首页', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'活动管理', 'url'=>array('/admin/activity/admin')), 
                            array('label'=>'新增活动', 'url'=>array('/admin/activity/create')),
                            array('label'=>'Most Popular', 'url'=>array('/product/index')),
                            array('label'=>'系统设置', 'url'=>array('/setting')),
                        ),
                        'itemCssClass'=>'ss',
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
                <h4>产品</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'首页', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'产品管理', 'url'=>array('/admin/product/admin')), 
                            array('label'=>'产品分类', 'url'=>array('/admin/product/type')),
                            array('label'=>'产品价格分类设置', 'url'=>array('/admin/productPriceRange/admin')),
                            array('label'=>'系统设置', 'url'=>array('/setting')),
                        ),
                        'itemCssClass'=>'ss',
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
                <h4>抓取设置</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'首页', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'抓取列表', 'url'=>array('/admin/spider/getList')), 
                            array('label'=>'产品s', 'url'=>array('/admin/spider/getContent')),
                            array('label'=>'抓取网站', 'url'=>array('/admin/spider/site')),
                            array('label'=>'系统设置', 'url'=>array('/setting')),
                        ),
                        'itemCssClass'=>'ss',
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
                <h4>系统管理</h4>
				<?php
                    $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'首页', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'divider')),
                            array('label'=>'会员管理', 'url'=>array('/admin/spider/getList')), 
                            array('label'=>'推广管理', 'url'=>array('/admin/adInfo/admin')),
                   
                        ),
                        'itemCssClass'=>'ss',
                        'htmlOptions'=>array('class'=>'nav nav-list'),
                    ));
                ?>
			</div>
		</div>
		<div class="span9">
			<?php echo $content; ?>
		</div>
	</div>
</div>	 	
<?php $this->endContent(); ?>
