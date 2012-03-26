<?php
App::uses('AppModel', 'Model');
/**
 * Listing Model
 *
 * @property Lt $Lt
 * @property Office $Office
 * @property Pj $Pj
 * @property Suburb $Suburb
 * @property Region $Region
 * @property State $State
 */
class Listing extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'lt_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'LtPhoto' => array(
			'className' => 'LtPhoto',
			'foreignKey' => 'lt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
