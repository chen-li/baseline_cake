<?php
App::uses('Contact', 'Model');

class LoginContactForm extends Contact {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'contacts';

	/**
	 * validate form elements
	 * @var array
	 */
	public $validate = array(
        'username' => 'email',
        'password' => array(
            'rule' => 'notEmpty'
        )
    );
	
}
?>