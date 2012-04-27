<?php
App::uses('AppController', 'Controller');
/**
 * Offices Controller
 *
 * @property Office $Office
 */
class OfficesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML');
	
	/**
	 * the cms text page of Tenancy Application
	 * @return void
	 */
	public function tenancyApplication(){
		$ofc = $this->Office->find('first', array('conditions'=>'office_id IN (1)'));
		$this->set('office', $ofc);
		$this->set('bodyClass', 'cms');
	}

}
