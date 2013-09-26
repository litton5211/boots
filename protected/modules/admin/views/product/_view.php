<tr id="t<?php echo $data->ProID?>" <?php if(($index+1)%2 == 0) echo "class='odd'"; ?> >
    <td style="width:10px;padding:0px 5px">
    <input name="nid[]" type="checkbox" value="<?php echo $data->ProID?>"></td>
    <td style="padding-left:0px">
                <?php echo CHtml::encode('['.$data->sorts->SortName.']'); ?>
				<?php echo CHtml::encode($data->ProName); ?>&nbsp;
    </td>
    <td class="action">
       <?php echo CHtml::link('查看', array('/page/product','id'=>$data->ProID),array('target'=>'_blank'))?>
       <?php echo CHtml::link('修改', array('products/update','id'=>$data->ProID),array('class'=>'edit'))?>
       <?php echo CHtml::link('删除', array('products/delete','id'=>$data->ProID),array('class'=>'delete','confirm'=>'确定删除?'))?>
    </td>
 </tr>