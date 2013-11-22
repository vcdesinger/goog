<?php
/* @var $this PagesController */
/* @var $model Pages */


$this->menu=array(
	array('label'=>'Список стрнаиц', 'url'=>array('index')),
	array('label'=>'Добавить страницу', 'url'=>array('create')),
);
?>

<h1>Update Pages <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>