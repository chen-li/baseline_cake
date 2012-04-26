<?php
App::uses('AppModel', 'Model');
/**
 * PCatg Model
 *
 */
class PCatg extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'p_catg';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'pcatg_id';
	
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'lt_catg',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
