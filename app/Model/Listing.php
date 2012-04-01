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
	
	var $actsAs = array('Containable');
	
	
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
		),
		'LtInsp' => array(
			'className' => 'LtInsp',
			'foreignKey' => 'lt_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExLtRecord' => array(
			'className' => 'ExLtRecord',
			'foreignKey' => 'lt_id',
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
		'Office' => array(
			'className' => 'Office',
			'foreignKey' => 'office_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PCatg' => array(
			'className' => 'PCatg',
			'foreignKey' => 'lt_catg',
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
		),
		'Region' => array(
			'className' => 'Region',
			'foreignKey' => 'region_id',
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
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	
	public $hasAndBelongsToMany = array(
		'Member' =>
			array(
				'className' => 'Member',
				'joinTable' => 'lt_mem',
				'foreignKey' => 'lt_id',
				'associationForeignKey' => 'mem_id',
				'unique' => true,
				'conditions' => '',
				'fields' => '',
				'order' => '',
				'limit' => '',
				'offset' => '',
				'finderQuery' => '',
				'deleteQuery' => '',
				'insertQuery' => ''
			)
	);
}
