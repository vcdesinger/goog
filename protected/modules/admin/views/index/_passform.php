<?php
/* @var $this IndexController */
/* @var $pass settings */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
    'action' => '/admin/index/reset',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($pass); ?>
    <?=$pass->password; ?>
	<div class="row">
		<?php echo $form->labelEx($pass,'oldpassword'); ?>
		<?php echo $form->textField($pass,'oldpassword',array('size'=>40,'maxlength'=>32)); ?>
		<?php echo $form->error($pass,'oldpassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pass,'newpassword'); ?>
		<?php echo $form->passwordField($pass,'newpassword',array('size'=>40,'maxlength'=>32)); ?>
		<?php echo $form->error($pass,'newpassword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pass,'confirm'); ?>
		<?php echo $form->passwordField($pass,'confirm',array('size'=>40,'maxlength'=>32)); ?>
		<?php echo $form->error($pass,'confirm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Изменить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->