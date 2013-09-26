    <h4>Product</h4>
    <div class="portfolio">
      <h2><?php echo $data->SortName?></h2>
      <?php $this->widget('zii.widgets.CListView', array(
	             'dataProvider'=>$result,
	             'itemView'=>'_pro',
	             'template' =>'{items}{pager}',
)); ?> 
    </div>
    <div style='float:right'>
    <?php if(!empty($label)):?>
    <div class="Sub">
      <h2>产品分类</h2>
       <?php $this->widget('zii.widgets.CMenu',array(
			     'items'=>$label
		)); ?>
         </div>
     <?php endif;?>
     <div class="clr"></div>
         <div class="right_body">
      <?php $this->renderPartial('_topNews',array(
	          'articles'=>$articles,
     )); ?>
    </div>
    </div>
    <div class="clr"></div>