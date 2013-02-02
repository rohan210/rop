<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Heartbeat extends AppModel {
var $name = 'Heartbeat';

public $belongsTo = array('Post',
        'User' => array(
            'className'    => 'SparkPlug.User',
            'foreignKey'   => 'user_id'
        )
    );

}
?>