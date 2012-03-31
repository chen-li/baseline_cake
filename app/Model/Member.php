<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 */
class Member extends AppModel {	
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'mem_id';
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	
	public $hasAndBelongsToMany = array(
		'Listing' =>
			array(
				'className' => 'Listing',
				'joinTable' => 'lt_mem',
				'foreignKey' => 'mem_id',
				'associationForeignKey' => 'lt_id',
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
	
	//http://devmoose.com/coding/10-awesome-cakephp-tutorials
}
