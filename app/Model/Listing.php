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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Office' => array(
			'className' => 'Office',
			'foreignKey' => 'office_id',
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
		'Region' => array(
			'className' => 'Region',
			'foreignKey' => 'region_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
