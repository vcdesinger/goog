<?php
/* @var $this IndexController */
/* @var $model settings */

$this->menu=array(
	array('label'=>'Посмотреть результат', 'url'=>array('index')),
);
?>

<h1>Настройки сайта</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<!--    <hr/>

    <h1>Изменить пароль администратора</h1>
--><?php /*echo $this->renderPartial('_passform', array('pass'=>$pass)); */?>