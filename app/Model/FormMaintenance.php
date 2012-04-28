<?php
App::uses('AppModel', 'Model');
/**
 * FormMaintenance Model
 *
 */
class FormMaintenance extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'form_maintenance';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'form_id';
/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'name';
	

	/**
	 * validate form elements
	 * @var array
	 */
	public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'address' => array(
            'rule' => 'notEmpty'
        ),
        'contact_phone' => array(
            'rule' => 'notEmpty'
        ),
        'email' => 'email',
        'manager' => array(
            'rule' => 'notEmpty'
        ),
        'repairs_required' => array(
            'rule' => 'notEmpty'
        )
    );
}
