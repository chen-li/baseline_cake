<?php
App::uses('AppModel', 'Model');
/**
 * Contact Model
 *
 */
class Contact extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cid';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	
	public $hasAndBelongsToMany = array(
		'Listing' =>
			array(
				'className' => 'Listing',
				'joinTable' => 'c_bookmark',
				'foreignKey' => 'cid',
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
    
	/**
	 * validate the form elements without saving to the database
	 * @param array $data
	 * @return array
	 */
    public function myValidate($data){
    	$error = '';
    	$this->set($data);
    	if(!$this->validates()){
    		$error = $this->invalidFields();
    	}
    	return $error;
    }
}
