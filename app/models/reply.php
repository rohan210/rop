<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Reply extends AppModel {
var $name = 'Reply';
public $belongsTo = array(
        'User' => array(
            'className'    => 'SparkPlug.User',
            'foreignKey'   => 'user_id'
        )
    );
}
?>