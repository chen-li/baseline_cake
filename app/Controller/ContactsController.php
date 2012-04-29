<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends AppController {

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array('HTML', 'session', 'Form');

	/**
	 * include the other tables
	 * @var array
	 */
	public $uses = array('contacts');


	/**
	 * the Property Alert page which has the Registration form or the Login form
	 * @return void
	 */
	public function propertyAlert(){
		if($this->Session->read('logged_in')){
			$this->redirect(array('controller'=>'Contacts', 'action'=>'myAlert'));
			exit();
		}
		// Single Model - Single Page - Multiple Forms Hack
		$this->loadModel('AddContactForm');
		$this->loadModel('LoginContactForm');
		$this->set('msg', '');
		$this->set('msg2', '');
		if(!empty($this->data)) {

			if(isset($this->data['AddContactForm'])){
				//if the form creates a new contact
				if(!$this->AddContactForm->save($this->data)){
					$this->set('msg2', "<p class='error_msg'>Please ensure all the ''red'' field(s) are filled in properly.</p>");
				}else{
					$this->login($this->data['AddContactForm']['email']);
					$this->redirect(array('controller'=>'Contacts', 'action'=>'myAlert'));
				}

			}else if(isset($this->data['LoginContactForm'])){
				//if a contact tried to login
				if($error = $this->LoginContactForm->myValidate($this->data)){
					$this->set('msg', "<p class='error_msg'><strong>Login Incorrect.</strong> Please check your login details or register below.</p>");
				}else{
					$this->login($this->data['LoginContactForm']['username']);
					$this->redirect(array('controller'=>'Contacts', 'action'=>'myAlert'));
				}

			}
		}

		$this->set('bodyClass', 'alert');
	}


	/**
	 * shows the My Property Alert page when a use logged in
	 * @param string $step
	 * @return void
	 */
	public function myAlert($step='mydetails'){
		$this->loadModel('Contact');
		$this->checkPermission();

		$this->set('msg2', '');
		if($step=='mydetails'){
			//if go to the mydetails section
			$contact = $this->Contact->find('first', array(
				'conditions'=>"Contact.cid = '".$this->Session->read('cid')."'"
			));
			$this->set('contact', $contact);
		}else{
			//if go to the myproperty section
			
		}

		//if edit a contact
		if(isset($this->data['AddContactForm'])){
			$this->editContact();
		}
		$this->set('bodyClass', 'alert');
	}

	/**
	 * allows a logged-in user to edit his details
	 * @return void
	 */
	public function editContact(){
		$this->loadModel('AddContactForm');
		$this->checkPermission();
		//if the form edits an existing contact
		$this->AddContactForm->id = $this->Session->read('cid');
		if(!$this->AddContactForm->save($this->data)){
			$this->set('msg2', "<p class='error_msg'>Please ensure all the ''red'' field(s) are filled in properly.</p>");
		}
	}


	/**
	 * check if this page is allowed to visit without logged in
	 * @return void
	 */
	public function checkPermission(){
		if(!$this->Session->read('logged_in')){
			$this->redirect(array('controller'=>'Contacts', 'action'=>'propertyAlert'));
			exit();
		}
	}

	/**
	 * (non-PHPdoc)
	 * @see app/Controller/AppController#beforeFilter()
	 */
	public function beforeFilter(){
		parent::beforeFilter();
	}

	/**
	 * log out
	 * @return void
	 */
	public function logout(){
		$this->Session->delete('user');
		$this->Session->delete('cid');
		$this->Session->delete('logged_in');
		$this->redirect($this->referer());
	}

	/**
	 * log in
	 * @param string $username
	 * @return void
	 */
	public function login($username){
		$this->loadModel('Contact');
		$results = $this->Contact->find('first', array(
			'conditions'=>"Contact.email LIKE '".$username."'"
			));
			if(sizeof($results['Contact'])){
				$this->Session->write('user', $results['Contact']['first_name']);
				$this->Session->write('cid', $results['Contact']['cid']);
				$this->Session->write('logged_in', true);
			}
	}
	
	public function forgetPassword(){
		if(isset($this->data['email'])){
			$this->Session->setFlash("<p class='error_msg'>Please fill in your email address</p>");
		}
		$this->render('forget_password', 'ajax');
	}

}
