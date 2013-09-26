      <div class="image">
        <p>
        <?php echo CHtml::image(CommonUse::formatPic($data->ProBigPic),$data->ProName,array('width'=>'269','height'=>'178'))?>        
        </p>
         <div class="clr"></div>
        <p><a href="<?php echo $this->createUrl('page/product/',array('id'=>$data->ProID))?>">read more</a></p>
	  </div>
	  <div class="text">
        <p><strong><?php echo $data->ProName?></strong></p>
        <p><?php echo $data->Prodescription?></p>
      </div>
      <div class="clr"></div>
