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
}
