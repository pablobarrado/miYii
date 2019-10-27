<?php
/* @var $this CategoriawebController */
/* @var $model Categoriaweb */

$this->breadcrumbs=array(
	'Categoriawebs'=>array('index'),
	$model->id_ca=>array('view','id'=>$model->id_ca),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categoriaweb', 'url'=>array('index')),
	array('label'=>'Create Categoriaweb', 'url'=>array('create')),
	array('label'=>'View Categoriaweb', 'url'=>array('view', 'id'=>$model->id_ca)),
	array('label'=>'Manage Categoriaweb', 'url'=>array('admin')),
);
?>

<h1>Update Categoriaweb <?php echo $model->id_ca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>