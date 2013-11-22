<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Banderas
 * Date: 08.05.13
 * Time: 14:45
 * To change this template use File | Settings | File Templates.
 */

class WebUser extends CWebUser {
    private $_model = null;

    function getRole() {
        if($users = $this->getModel()){
            // в таблице User есть поле role
            return $users->role;
        }
    }

    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Users::model()->findByPk($this->id, array('select' => 'role'));
        }
        return $this->_model;
    }
}