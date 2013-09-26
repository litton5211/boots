  <div class="body">
  <h4>About Us</h4>
    <div class="about_body">
      <h2> <?php echo $page->AloneName?></h2>
      <div>
          <p class="grey"><?php echo $page->AloneAbstract?></p>		  
          <p><?php echo $page->AloneContent?></p>
      </div>
    </div>
    <div style='float:right'>
    <?php if(!empty($label)):?>
    <div class="Sub">
      <h2><?php echo $page->sorts->SortName;?></h2>
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
  </div>