<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>

<div class="row">
<h3>Crear Role</h3>
<?php 
$form = $this->beginWidget("CActiveForm");
 
echo $form->labelEx($role,"name")."<br>";
echo $form->textField($role,"name")."<br>";
echo $form->error($role,"name")."<br>";
   
echo $form->labelEx($role,"descripcion")."<br>";
echo $form->textArea($role,"descripcion")."<br>";
echo $form->error($role,"descripcion")."<br>";

echo CHtml::submitButton("Create",array("class","btn btn-primary"));

$this->endWidget();
?></div>
    
    <?php

/*

foreach(Yii::app()->authManager->getAuthItems() as $data):
    
    ?><ul class="nav nav-tabs nav-stacked">
        <li><?php echo  $data->name.":"?>
            <?php echo "type es : ";
                if($data->type == "0") echo "Role"; 
                if($data->type == "1") echo "Tarea"; 
                if($data->type == "2") echo "Operación"; ?>            
            
            <p><?php $enabled = Yii::app()->authManager->checkAccess($data->name,$model->id); ?> </p>
               <?php echo $enabled?"<span>Activo</span>":"Desactivado";?>
            <p><?php echo  $data->description;?></p>
            <p><?php echo CHtml::link($enabled?"Off":"On",array("user/assign","id"=>$model->id,"item"=>$data->name),array("class"=>$enabled));?></p>
        </li>
        
</ul><?php
   
endforeach;
 * 
 */
?>