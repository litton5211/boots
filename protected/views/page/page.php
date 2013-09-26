  <div class="body">
  <h4>About Us</h4>
    <div class="about_body">
      <h2> <?php echo $data->SortName ?></h2>
      <div>
     <?php if(empty($result)) echo "<p>".$data->SortContent."</p>" ?>
     <?php foreach ($result as $vi):?>
          <div>
          <h3><?php echo $vi->AloneName?></h3>
          <p><?php echo $vi->AloneAbstract?> </p>
          <p> </p>      <p> </p>
          </div>     
          <p>&nbsp;</p>
      <?php endforeach;?>
      <p> </p>
      <p> </p>
      </div>
    </div>
    <div style='float:right'>
    <?php if(!empty($label)):?>
    <div class="Sub">
       <h2><?php echo $data->SortName ?></h2>
       <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>$label
		)); ?>
    </div>
     <div class="clr"></div>
     <?php endif;?>
    <div class="right_body">
      <?php $this->renderPartial('_topNews',array(
	'articles'=>$articles,
     )); ?>
    </div>
    </div>
    <div class="clr"></div>
  </div>