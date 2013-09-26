<?php
$this->breadcrumbs=array(
	'Products',
);
?>

<h2><a href="#">网站内容管理</a> &raquo; <a href="#" class="active">产品管理</a></h2>
<div id="main">
<?php echo CHtml::beginForm('','',array('class'=>'jNice')); ?>
    <h3>产品列表</h3>
    <p style=" margin:5px 10px; line-height:24px;">   
    <?php $sorts = Products::getTypeOptions(false);
          echo CHtml::Link(
          '全部', 
          array('products/index')
          ).'&nbsp;&nbsp';
          foreach ($sorts as $key=>$sort) {
          	echo CHtml::Link($sort, array('index','id'=>$key))."&nbsp;&nbsp;";
          }
     ?>                   
    </p>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'itemsTagName' =>'table',
        'template' =>'{items}{pager}',
)); ?>
 <h3></h3>
   <?php echo CHtml::dropDownList('ProSort','',$newProduct->getTypeOptions()) ?>
   <?php
echo CHtml::ajaxSubmitButton(
    '批量移动',
    array('products/move'),
    array(
        'success'=>'function(){location.reload()}',
    ),
    array(
        'type'=>'submit',
	'confirm'=>'你确定要移动这些项吗?',
    )
);
echo CHtml::ajaxSubmitButton(
    '批量删除',
    array('products/delete'),
    array(
        'success'=>'function(){location.reload()}',
    ),
    array(
        'type'=>'submit',
	'confirm'=>'你确定要删除这些项吗?',
    )
);?>
   <div class="clear"></div>
   <?php echo CHtml::endForm(); ?>
    <h3><a name='add'>添加产品</a></h3>
    <?php echo $this->renderPartial('_form', array('model'=>$newProduct)); ?>
</div>