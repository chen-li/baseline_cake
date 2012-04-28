<?php
App::uses('AppController', 'Controller');
/**
 * FormContacts Controller
 *
 * @property FormContact $FormContact
 */
class FormContactsController extends AppController {

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
	public $uses = array('FormContact', 'Office', 'State', 'Suburb');

	/**
	 * the form for Vacate Notices
	 * @param $type
	 * @return void
	 */
	public function contact(){
		$ofc = $this->Office->find('first');
		$this->set('office', $ofc);
		$this->set('bodyClass', 'contact');
		$this->set('msg', '');
		if ($this->request->is('post')) {    
			if ($this->FormContact->save($this->request->data)) {
				$this->set('msg', "<p class='success_msg'>The form has been processed.</p>");
			} else {
				$this->set('msg', "<p class='error_msg'>The form could not be processed. Please, try again.</p>");
			}
		}
	}


}
