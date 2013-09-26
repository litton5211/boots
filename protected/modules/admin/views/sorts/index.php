<?php
$this->breadcrumbs=array(
	'Sorts',
);
?>

<h2><a href="#">栏目管理</a> &raquo; <a href="#" class="active">栏目列表</a></h2>
<div id="main">
<h3>栏目列表</h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'itemsTagName' =>'table',
        'template' =>'{items}{pager}',
)); ?>
<h3>新建栏目</h3>
    <?php echo $this->renderPartial('_form', array('model'=>$newSort)); ?>
</div>

