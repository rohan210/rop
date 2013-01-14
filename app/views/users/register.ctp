<?php
echo $form->create('User',array('action'=>'register'));
echo $form->input('name',array('value'=>''));
echo $form->input('email',array('value'=>''));
echo $form->input('username',array('after'=>$form->error('username_taken_error','Sorry! This username has been taken. Please choose another one')));
echo $form->input('password',array('value'=>''));
echo $form->input('password_confirm', array('value'=>'','type'=>'password','error'=>'Please enter your password again'));
echo $form->end('Register');
?>