<?php
App::uses('AppModel', 'Model');
/**
 * Office Model
 *
 */
class Office extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'office_id';
	
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'office_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Suburb' => array(
			'className' => 'Suburb',
			'foreignKey' => 'suburb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
