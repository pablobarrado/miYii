<?php
/* @var $this CategoriawebController */
/* @var $model Categoriaweb */

$this->breadcrumbs=array(
	'Categoriawebs'=>array('index'),
	$model->id_ca,
);

$this->menu=array(
	array('label'=>'List Categoriaweb', 'url'=>array('index')),
	array('label'=>'Create Categoriaweb', 'url'=>array('create')),
	array('label'=>'Update Categoriaweb', 'url'=>array('update', 'id'=>$model->id_ca)),
	array('label'=>'Delete Categoriaweb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categoriaweb', 'url'=>array('admin')),
);
?>

<h1>View Categoriaweb #<?php echo $model->id_ca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ca',
		'nombre',
		'descripcion',
		'categoria_padre',
	),
)); ?>
