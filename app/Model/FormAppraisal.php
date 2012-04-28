<?php
App::uses('AppModel', 'Model');
/**
 * FormAppraisal Model
 *
 */
class FormAppraisal extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'form_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';
	
	/**
	 * validate form elements
	 * @var array
	 */
	public $validate = array(
        'first_name' => array(
            'rule' => 'notEmpty'
        ),
        'last_name' => array(
            'rule' => 'notEmpty'
        ),
        'email' => 'email',
        'mobile' => array(
            'rule' => 'notEmpty'
        ),
        'street_unit_number' => array(
            'rule' => 'notEmpty'
        ),
        'street_name' => array(
            'rule' => 'notEmpty'
        ),
        'state' => array(
            'rule' => 'notEmpty'
        ),
        'property_type' => array(
            'rule' => 'notEmpty'
        ),
        'age' => array(
            'rule' => 'notEmpty'
        ),
        'number_bedrooms' => array(
            'rule' => 'notEmpty'
        ),
        'living_areas' => array(
            'rule' => 'notEmpty'
        ),
        'suburb' => array(
            'rule' => 'notEmpty'
        ),
        'property_status' => array(
            'rule' => 'notEmpty'
        ),
        'construction_type' => array(
            'rule' => 'notEmpty'
        ),
        'number_bathrooms' => array(
            'rule' => 'notEmpty'
        ),
        'outdoor_living_areas' => array(
            'rule' => 'notEmpty'
        ),
        'parking' => array(
            'rule' => 'notEmpty'
        ),
        'air_conditioning' => array(
            'rule' => 'notEmpty'
        ),
        'property_condition' => array(
            'rule' => 'notEmpty'
        ),
        'pool' => array(
            'rule' => 'notEmpty'
        ),
        'property_renovated' => array(
            'rule' => 'notEmpty'
        ),
        'property_description' => array(
            'rule' => 'notEmpty'
        )
    );
}
