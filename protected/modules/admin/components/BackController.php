<?php

class BackController extends Controller
{
    public $layout = '/layouts/column2';

	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
	            'accessControl',
                'postOnly + delete', // we only allow deletion via POST request
		);
	}

    public function accessRules()
    {
        return array(
            array(
                'allow',
                'roles'=>array('3'),
                //'actions'=>array('index','cats','galleries','images','pages'),
            ),
            array('allow',
                'actions'=>array('login','logout'),
                'roles'=>array('guest'),
            ),
			array('allow',
                'actions'=>array('login','logout'),
                'roles'=>array('moderator'),
            ),
            array('deny',  // deny all users
                'roles'=>array('guest','1'),
            ),
        );
    }

}