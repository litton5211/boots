      <h2> 最新新闻</h2>
	<?php foreach ($articles as $article):?>
	<div>
        <div class="data"><?php echo str_replace('-','.',substr($article->ArtUpdateTime,0,10))?></div>     
         <p> </p>
        <div class="title"><?php echo $article->ArtTitle?></div>      
         <p> </p>
        <div class="clr"></div>
        <p><?php echo $article->ArtDescription?></p>
        <p><a href="<?php echo $this->createUrl('page/newsshow/',array('id'=>$article->ArtID))?>">
        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/read_more.gif" width="88" height="27" alt="picture">
        </a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
       </div>
	  <?php endforeach;?>