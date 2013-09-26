<?php
$this->breadcrumbs=array(
	'Messages',
);
?>
  <h4>Contact</h4>
  <div class="Contact">
      <h2>客户服务</h2>
      <div class="msglist">      
<?php $this->widget('zii.widgets.CListView', array(
	    'dataProvider'=>$dataProvider,
	    'itemView'=>'_view',
        'tagName'=>'div',
        'itemsTagName'=>'ul',
        'itemsCssClass'=>'',
        'template' => '{items}{pager}',
)); ?>
   </div>
    <?php echo $this->renderPartial('_form', array('model'=>$newmsg)); ?>
    </div>
<div class="contact_info">
    
<p>请在此留下您对GTCMS的建议以及意见,我们将有专人跟进您反馈的问题.</p>
<div class="bg">&nbsp;</div>
<p><a href="#"><strong>客户服务</strong></a></p>
<p>******技术支持.</p>
<p><strong>E-mail: webmaster@graytime.com</strong><br>
<strong>QQ:</strong>******</p>
<p><a href="#"><strong>技术支持</strong></a></p>
<p>GTCMS技术支持.</p>
<p><strong>手机:</strong>158888888888<br>
<strong>E-mail: webmaster@graytime.com</strong><br>
<strong>QQ:</strong>******</p>
<div class="bg">&nbsp;</div>
<p><strong>Address:</strong> *************<br>
<strong>Telephone:</strong> +010-*******-***<br>
<strong>邮编:</strong> ******<br>
<strong>E-mail:</strong> <a href="#">webmaster@graytime.com</a></p>

  </div>
    <div class="clr"></div>

