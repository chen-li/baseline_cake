<?php
App::uses('Contact', 'Model');

class AddContactForm extends Contact {
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
        'first_name' => array(
            'rule' => 'notEmpty'
        ),
        'last_name' => array(
            'rule' => 'notEmpty'
        ),
		'email'=>array(
			'Valid email'=>array(
				'rule'=>array('email')
			),
		    'Match passwords'=>array(
		        'rule'=>'matchEmails'
		    ),
		    'No Duplication'=>array(
		    	'rule'=>'isUnique'
		    )
		),
		'email_confirmation'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty'
		    )
		),
		'password'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty'
		    ),
		    'Match passwords'=>array(
		        'rule'=>'matchPasswords'
		    )
		),
		'password_confirmation'=>array(
		    'Not empty'=>array(
		        'rule'=>'notEmpty'
		    )
		)
        
    );
    
	/**
	 * check if the password and the confirmed password are same
	 * @param array $data
	 * @return bool
	 */
	public function matchPasswords($data) {
	    if ($data['password'] == $this->data['AddContactForm']['password_confirmation']) {
	        return true;
	    }
	    $this->invalidate('password_confirmation');
	    return false;
	}
    
	/**
	 * check if the email and the confirmed email are same
	 * @param array $data
	 * @return bool
	 */
	public function matchEmails($data) {
	    if ($data['email'] == $this->data['AddContactForm']['email_confirmation']) {
	        return true;
	    }
	    $this->invalidate('email_confirmation');
	    return false;
	}
	
	
	public function beforeSave() {
	    if(isset($this->data['AddContactForm']['password'])) {
	        $this->data['AddContactForm']['password'] = md5($this->data['AddContactForm']['password']);
	    }
	    return true;
	}
}
?>