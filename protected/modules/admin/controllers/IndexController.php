<?php

class IndexController extends BackController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

    public $layout = '/layouts/column1';
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


	public function actionIndex()
	{
		$model=$this->loadModel(1);
  //      $pass = Users::model()->findByPk(1);

		if(isset($_POST['Settings']))
		{
			$model->attributes=$_POST['Settings'];
			if($model->save())
				$this->redirect(array('index'));
		}

		$this->render('index',array(
			'model'=>$model,
//			'pass'=>$pass,
		));
	}

/*    public function actionReset()
    {
        $model=Users::model()->findByPk(1);
        $oldpass = $model->password;

        if(isset($_POST['Users']))
        {
            $model->attributes=$_POST['Users'];
            print_r($model->attributes);
            exit();
            if ($oldpass == md5($model->oldpassword))
            {

                echo '1';
                if ($model->newpassword == $model->confirm)
                {
                    echo '2';
                    $model->password = md5($model->newpassword);
                    if($model->save())
                    {
                        echo '3';
                        exit();
                        $this->redirect(array('index'));
                    }
                }
            }

        }
        $this->render('index',array(
            'model'=>$model,
        ));
    }
*/

    public function actionMd5($string)
    {
        echo md5($string);
    }


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return settings the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Settings::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param settings $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='settings-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionLogin()
    {
        $model=new LoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        echo 'login';
        // display the login form
        $this->render('/layouts/login',array('model'=>$model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}
