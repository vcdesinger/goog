<?php
/* @var $this IndexController */
/* @var $model settings */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mk'); ?>
		<?php echo $form->textField($model,'mk',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'md'); ?>
		<?php echo $form->textField($model,'md',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'md'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'mt'); ?>
        <?php echo $form->textField($model,'mt',array('size'=>60,'maxlength'=>250)); ?>
        <?php echo $form->error($model,'mt'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hinfo'); ?>
		<?php echo $form->textField($model,'hinfo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'hinfo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imgpp'); ?>
		<?php echo $form->textField($model,'imgpp'); ?>
		<?php echo $form->error($model,'imgpp'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->