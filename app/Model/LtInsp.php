<?php
App::uses('AppModel', 'Model');
/**
 * LtInsp Model
 *
 */
class LtInsp extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'lt_insp';
	
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
		),
	);
}
