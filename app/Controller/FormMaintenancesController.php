<?php
App::uses('AppController', 'Controller');
/**
 * FormMaintenances Controller
 *
 * @property FormMaintenance $FormMaintenance
 */
class FormMaintenancesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML', 'session', 'Form');


	/**
	 * the form for Maintenance Requests
	 * @param $type
	 * @return void
	 */
	public function form(){
		$this->set('bodyClass', 'forms');
		//pr($this->request->data);  
		$this->set('msg', '');
		if ($this->request->is('post')) {    
			if ($this->FormMaintenance->save($this->request->data)) {
				$this->set('msg', "<p class='success_msg'>The form has been processed.</p>");
			} else {
				$this->set('msg', "<p class='error_msg'>The form could not be processed. Please, try again.</p>");
			}
		}
	}


}
