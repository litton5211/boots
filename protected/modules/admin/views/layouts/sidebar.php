<?php $this->beginContent('/layouts/main'); ?>
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
      <!-- Logo (221px wide) -->
      <a href="http://www.readeep.com"><img id="logo" src="<?php echo $this->module->registerImage('logo.png');?>" alt="访问深度阅读" /></a>
      <!-- Sidebar Profile links -->
      <div id="profile-links"> 你好, 
      	<a href="#" title="Edit your profile">管理员</a>, 你有 
      	<a href="#messages" rel="modal" title="3 Messages">3 条信息</a><br /> <br />
        <a href="#" title="http://www.readeep.com">查看网站</a> | <a href="#" title="Sign Out">退出</a> 
      </div>
      <ul id="main-nav">
        <!-- Accordion Menu -->
        <li> <a href="#" class="nav-top-item current">文章 </a>
          <ul>
            <li><a class="current" href="<?php echo Yii::app()->createUrl('admin/post/admin');?>">管理文章</a></li>
            <!-- Add class "current" to sub menu items also -->
            <li><a href="<?php echo Yii::app()->createUrl('admin/post/create');?>">创建文章</a></li>
            <li><a href="#">管理类别</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item">视频管理 </a>
          <ul>
            <li><a href="<?php echo Yii::app()->createUrl('admin/post/video');?>">视频列表</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/video/update');?>">视频源配置</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item"> 图片长廊 </a>
          <ul>
            <li><a href="#">上传图片</a></li>
            <li><a href="#">管理图片</a></li>
            <li><a href="#">管理相册</a></li>
            <li><a href="#">相册设置</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item"> 活动日程表 </a>
          <ul>
            <li><a href="#">日程浏览</a></li>
            <li><a href="#">创建新日程</a></li>
            <li><a href="#">日程设置</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item">抓取设置</a>
          <ul>
            <li><a href="<?php echo Yii::app()->createUrl('admin/spider/getList');?>">抓取列表</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/spider/getContent');?>">测试</a></li>
            <li><a href="#">个人资料设置</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('admin/spider/site');?>">抓取网站配置</a></li>
          </ul>
        </li>
        <?php 
			$menus = require(Yii::app()->basePath . '/config/site_menu.php');
			foreach ($menus as $menu=>$list){
		?>
		<li>
			<a class="nav-top-item" href="#" style="padding-right: 15px;"><?php echo $menu ?></a>
			<?php $this->widget('zii.widgets.CMenu',array(
								'items'=>$list,
								
                        		'activeCssClass'=>'current',
					)); ?>
		</li>
		<?php }?>
      </ul>
	
      <!-- End #main-nav -->
      <div id="messages" style="display: none">
        <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
        <h3>3条信息</h3>
        <p> <strong>17th May 2009</strong> by 管理员<br />
          日志 <small><a href="#" class="remove-link" title="Remove message">移动</a></small> </p>
        <p> <strong>2nd May 2009</strong> by Jane 管理员<br />
         日志 <small><a href="#" class="remove-link" title="Remove message">移动</a></small> </p>
        <p> <strong>25th April 2009</strong> by 管理员<br />
        日志 <small><a href="#" class="remove-link" title="Remove message">移动</a></small> </p>
        <form action="#" method="post">
          <h4>新信息</h4>
          <fieldset>
          <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
          </fieldset>
          <fieldset>
          <select name="dropdown" class="small-input">
            <option value="option1">发送给</option>
            <option value="option2">每个人</option>
            <option value="option3">管理员</option>
          </select>
          <input class="button" type="submit" value="发送" />
          </fieldset>
        </form>
      </div>
      <!-- End #messages -->
    </div>
  </div>
  <!-- // #end mainNav -->
  <div id="main-content">
        <?php echo $content?>
  </div>  
        
<?php $this->endContent(); ?>