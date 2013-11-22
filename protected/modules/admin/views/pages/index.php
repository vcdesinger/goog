<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->menu=array(
	array('label'=>'Добавить страницу', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление страницами</h1>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pages-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'parent_id' => array(
            'name' => 'parent_id',
            'value' => $model->id, //'$data->title',
            'filter' => Pages::findPagesAll(),// allPages($model->id),
        ),
		'cat_id' => array(
            'name' => 'cat_id',
            'value' =>  '$data->cats->title',
            'filter' => Cats::allCats(),
        ),
		'title',
		'uri',
		'content' => array(
            'name' => 'content',
            'value' => 'substr(strip_tags("$data->content"), 0, 200)',
            'filter' => false
        ),
		'pos',
		/*
		'mt',
		'mk',
		'md',
		*/
		array(
			'class'=>'CButtonColumn',
            'viewButtonOptions' => array('style' => 'display: none'),
		),
	),
)); ?>
