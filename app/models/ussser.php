<?php
class User extends AppModel {
var $hasMany = 'Post';    
var $validate = array(
'username' => array('rule' => 'alphaNumeric','required' => true),

'password' => array('rule' => 'alphaNumeric','required' => true),
'password_confirm' => array('rule' => array('validateConfirmPassword'),'message'=>'Mismatch'),
);

/** validate only run through Model->save() or Model->validates() */
function validateConfirmPassword($data) {
if ($this->data['User']['password'] == AuthComponent::password($this->data['User']['password_confirm'])) {
return true;
} // fi
return false;
}

/** check username taken or not */
function beforeValidate() {
if (empty($this->id)) { // being created, check for existing username
$vCond = array('User.username'=>$this->data['User']['username']);
if ($this->find('count',array('conditions'=>$vCond))>0) { // taken
$this->invalidate('username_taken_error');
return false;
} // fi
} // fi
return true;
}
}
?>