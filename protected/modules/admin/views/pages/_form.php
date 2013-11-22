<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля со <span class="required">*</span> обязательны к заполнению.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->dropDownList($model,'parent_id',Pages::allPages($model->id), array('style' => 'width: 125px;')); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id',Cats::allCats()); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'uri'); ?>
        <?php echo $form->textField($model,'uri',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'uri'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
        <?php $this->widget('application.extensions.ckeditor.CKEditor', array( 'model'=>$model, 'attribute'=>'content', 'language'=>'ru', 'editorTemplate'=>'full', )); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pos'); ?>
		<?php echo $form->textField($model,'pos'); ?>
		<?php echo $form->error($model,'pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mt'); ?>
		<?php echo $form->textField($model,'mt',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mt'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->