<?php
App::uses('AppModel', 'Model');
/**
 * Region Model
 *
 */
class Region extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'region_id';
	
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Listing' => array(
			'className' => 'Listing',
			'foreignKey' => 'region_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
