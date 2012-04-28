<?php
App::uses('AppModel', 'Model');
/**
 * Suburb Model
 *
 */
class Suburb extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'suburb_id';
	
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'suburb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Office' => array(
			'className' => 'Office',
			'foreignKey' => 'suburb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
