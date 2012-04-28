<?php
App::uses('AppModel', 'Model');
/**
 * FormContact Model
 *
 */
class FormContact extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'form_contact';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'form_id';
	

	/**
	 * validate form elements
	 * @var array
	 */
	public $validate = array(
        'regarding' => array(
            'rule' => 'notEmpty'
        ),
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'phone' => array(
            'rule' => 'notEmpty'
        ),
        'comments' => array(
            'rule' => 'notEmpty'
        ),
        'email' => 'email'
    );
}
