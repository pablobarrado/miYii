<?php
/* @var $this CategoriawebController */
/* @var $model Categoriaweb */

$this->breadcrumbs=array(
	'Categoriawebs'=>array('index'),
	$model->id_ca,
);

 


if(  ($mensaje=Yii::app()->user->getFlashes()) !==null): 
    foreach ($mensaje as $type => $message) :
    ?><div class="alert-messaget"><?php echo $message;?>       
     </div>
    <?php
    endforeach;    
    
    endif;


$this->menu=array(
	array('label'=>'Listar Categoriaweb', 'url'=>array('index')),
	array('label'=>'Crear Categoriaweb', 'url'=>array('create')),
	array('label'=>'Editar Categoriaweb', 'url'=>array('update', 'id'=>$model->id_ca)),
	array('label'=>'Borrar Categoriaweb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gestión Categoriaweb', 'url'=>array('admin')),
	array('label'=>'Activar Categoriaweb', 'url'=>array('Enabled')),
);
?>

<h1>Ver Categoriaweb #<?php echo $model->id_ca; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ca',
		'nombre',
		'descripcion',
		'categoria_padre',
		'status',
	),
)); ?>
