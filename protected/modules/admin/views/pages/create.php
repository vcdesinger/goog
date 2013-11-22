<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->menu=array(
	array('label'=>'Список страниц', 'url'=>array('index')),
);
?>

<h1>Добавление страницы</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>