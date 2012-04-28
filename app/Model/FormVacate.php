<?php
App::uses('AppModel', 'Model');
/**
 * FormVacate Model
 *
 */
class FormVacate extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'form_vacate';
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
        'tenant_name' => array(
            'rule' => 'notEmpty'
        ),
        'property_address' => array(
            'rule' => 'notEmpty'
        ),
        'vacate_date' => array(
            'rule' => 'notEmpty'
        ),
        'are_breaking_lease' => array(
            'rule' => 'notEmpty'
        ),
        'contact_phone' => array(
            'rule' => 'notEmpty'
        ),
        'email' => 'email'
    );
}
