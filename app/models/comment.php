<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Comment extends AppModel {
var $name = 'Comment';
public $belongsTo = array('Post',
        'User' => array(
            'className'    => 'SparkPlug.User',
            'foreignKey'   => 'user_id'
        )
    );
}
?>