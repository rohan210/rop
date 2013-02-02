<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Advice extends AppModel {
var $name = 'Advice';
public $belongsTo = array(
        'User' => array(
            'className'    => 'SparkPlug.User',
            'foreignKey'   => 'user_id'
        )
    );

}
?>