<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Post extends AppModel {
var $name = 'Post';
var $hasOne ='PostDetail';
 public $belongsTo = array(
        'User' => array(
            'className'    => 'SparkPlug.User',
            'foreignKey'   => 'user_id'
        )
    );
    
}
?>
 