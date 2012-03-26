<?php
App::uses('AppModel', 'Model');
/**
 * LtPhoto Model
 *
 */
class LtPhoto extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'lt_photo';
	
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
