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
