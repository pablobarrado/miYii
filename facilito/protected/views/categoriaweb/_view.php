<?php
/* @var $this CategoriawebController */
/* @var $data Categoriaweb */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ca')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ca), array('view', 'id'=>$data->id_ca)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_padre')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_padre); ?>
	<br />


</div>