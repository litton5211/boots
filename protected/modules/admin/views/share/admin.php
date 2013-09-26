
<div class="hero-unit">
	<form class="form-inline">
		<label class="control-label">用户：</label>
    	<input type="text" class="input-small" placeholder="用户名称">
    	<label class="control-label">产品：</label>
    	<input type="password" class="input-small" placeholder="关联产品">
    	<label class="control-label">审核状态：</label>
    	<input type="password" class="input-small" placeholder="审核状态">
    	<div class="input-append date form_datetime" data-date-format="yyyy-mm-dd">
	    	<input size="12" type="text"  class="input-small"  readonly>
	    	<span class="add-on"><i class="icon-th"></i></span>
	    </div>
    	
    	<button type="submit" class="btn btn-primary">查询</button>
    </form>

</div>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'share-grid',
	'dataProvider'=>$model->search(),
	'rowCssClass'=>array('','info'),
	'columns'=>array(
		'id',
		'userid',
		'title',
		'content',
		'create_time',
		'pic',
		array(
			'class'=>'CButtonColumn',
		),
	),
	'itemsCssClass'=>'table table-hover table-bordered',
)); ?>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
    	format:'yyyy-mm-dd',
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
        minView:2,
        initialDate:new Date(),
        pickerPosition: "bottom-left"
    });
</script>


