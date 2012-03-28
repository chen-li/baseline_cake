<?php
App::uses('AppModel', 'Model');
/**
 * ExLtRecord Model
 *
 */
class ExLtRecord extends AppModel {	
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'ex_lt_records';
	
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'lt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
