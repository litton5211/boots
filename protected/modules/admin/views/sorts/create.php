<?php
$this->breadcrumbs=array(
	'Sorts'=>array('index'),
	'Create',
);
?>
<style>
label {
color: #646464;
display: block;
font-weight: 600;
line-height: 14px;
margin: 0px 0px 7px;
width: 100%;
}
.text-long {
//background: white url(http://172.19.33.102/admin/style/img/input-shaddow.gif) no-repeat 0% 0%;
border: 1px solid #DDD;
color: #646464;
float: left;
font: normal normal normal 12px/normal Arial, Helvetica, sans-serif;
margin: 0px 10px 0px 0px;
padding: 5px 7px;
width: 264px;
}
.text-small {
//background: white url(http://172.19.33.102/admin/style/img/input-shaddow.gif) no-repeat 0% 0%;
border: 1px solid #DDD;
color: #646464;
float: left;
font: normal normal normal 12px/normal Arial, Helvetica, sans-serif;
margin: 0px 10px 0px 0px;
padding: 5px 7px;
width: 44px;
}
</style>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>