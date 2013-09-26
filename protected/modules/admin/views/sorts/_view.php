    <?php $type = $data->getTypeOptions();?>
<tr id="t<?php echo $data->sortid?>" <?php if(($index+2)%2 == 0) echo "class='odd'"; ?> >
    <td style="padding-right:0px;"><?php echo $data->sortid?></td>
    <td style="padding-left:0px;">
            <?php echo CHtml::encode($data->SortName); ?>			
    </td>
    <td style="padding-left:0px;">
            <?php if($data->SortIsNav) {?><font color='red'><?php echo CHtml::encode('导航显示') ?></font>	
            
            <?php }else echo CHtml::encode('普通栏目') ;; ?>			
    </td>
    <td style="padding-left:0px;">
            <?php echo CHtml::encode(Yii::app()->params["sys_param"]["SORT_TYPE"][$data->SortType]); ?>			
    </td>
    <td class="action"> 
       <?php echo CHtml::link('修改', array('sorts/update','id'=>$data->sortid),array('class'=>'edit'))?>
       <?php echo CHtml::link('删除', array('sorts/delete','id'=>$data->sortid),array('class'=>'delete','confirm'=>'确定删除'))?>
    </td>
 </tr>