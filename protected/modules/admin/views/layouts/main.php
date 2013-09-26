<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->pageTitle;?></title>
    <?php /********************    CSS    ******************************/?>
    <?php echo $this->module->registerCss('reset.css', 'screen');?>
	
    <?php echo $this->module->registerCss('style.css', 'screen');?>
 
    <?php echo $this->module->registerCss('invalid.css', 'screen');?>
	<?php echo $this->module->registerCss('colorbox.css', 'screen');?>
	<?php $cs=Yii::app()->clientScript; $cs->registerCoreScript('jquery');?>
	
    <?php echo $this->module->registerJs('simpla.jquery.configuration.js', 'screen');?>  
    <?php echo $this->module->registerJs('facebox.js', 'screen');?> 
	<?php echo $this->module->registerJs('jquery.wysiwyg.js', 'screen');?>  
    <?php echo $this->module->registerJs('jquery.datePicker.js', 'screen');?>  
    <?php echo $this->module->registerJs('jquery.date.js', 'screen');?>
	
   
    <?php /**********************    javascripts    ***********************/?>   
    <?php echo $this->module->registerJs('fileup.js', 'screen');?>  
    <?php echo $this->module->registerJs('jNice.js', 'screen');?>  
    <?php echo $this->module->registerJs('jquery.colorbox-min.js', 'screen');?>  
    <script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({opacity:0.4});
		$(".inline").colorbox({opacity:0.4,width:"50%", inline:true, href:"#ModalContent"});
	});			
    </script>       
</head>
<body>
<div id="body-wrapper">
    	 <!-- Wrapper for the radial gradient background -->
 
        <?php echo $content?>
  
</div>
    <!-- // #wrapper -->
</body>
</html>
