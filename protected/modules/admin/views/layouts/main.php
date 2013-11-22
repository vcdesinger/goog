<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/print.css" media="print" />
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/ie.css" media="screen, projection" />
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css" />

    <title>ADMIN - ЕвроСтройПроект</title>
</head>

<body>
<div class="container" id="page">

    <div id="mainmenu">
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'Настройки сайта', 'url'=>array('/admin/index')),
                array('label'=>'Категории', 'url'=>array('/admin/cats')),
                array('label'=>'Страницы', 'url'=>array('/admin/pages')),
                array('label'=>'Галереи', 'url'=>array('/admin/galleries')),
                array('label'=>'Изображения', 'url'=>array('/admin/images')),
                array('label'=>'Выйти ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Перейти на главную', 'url'=>array('/site/index')),
            ),
        )); ?>
    </div><!-- mainmenu -->

    <?php echo $content; ?>

    <div class="clear"></div>

    <div id="footer">
        Copyright © 2013 by <a href="http://dicreation.ru/" target="_blank">Dicreation</a>.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div><!-- footer -->

</div><!-- page -->

</body>
</html>
