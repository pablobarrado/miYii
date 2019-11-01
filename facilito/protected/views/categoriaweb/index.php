<?php
/* @var $this CategoriawebController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categoriawebs',
);

$this->menu=array(
	array('label'=>'Create Categoriaweb', 'url'=>array('create')),
	array('label'=>'Manage Categoriaweb', 'url'=>array('admin')),
	array('label'=>'Fichero excel', 'url'=>array('enviarArchivo')),
);
?>

<h1>Categoria webs</h1>

<?php
if(  ($mensaje=Yii::app()->user->getFlashes()) !==null): 
    foreach ($mensaje as $type => $message) :
    ?><div class="container">        
        <div class="alert-message">
        <?php echo $message;?>       
        </div>
     </div>
    <?php
    endforeach;    
    
    endif;
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
