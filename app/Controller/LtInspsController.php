<?php
App::uses('AppController', 'Controller');
/**
 * LtInsps Controller
 *
 * @property LtInsp $LtInsp
 */
class LtInspsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML', 'Time');

	
	/**
	 * show the Open Homes page
	 * @param $group
	 * @return void
	 */
	public function inspection($group='date'){
		$cond = array(
			'conditions' => $this->searchCriteria()
		);
		switch($group){
			case 'suburb':
				$cond['order'] = array('Listing.suburb_name');
				break;
			case 'date':
			default:
				$cond['order'] = array('LtInsp.insp_start');
		}
		$lt = $this->LtInsp->find('all', $cond);
		$this->set('listings', $lt);
		$this->set('bodyClass', 'inspections');
	
		switch($group){
			case 'suburb':
				$this->render('inspection_suburb');
				break;
			case 'date':
			default:
				$this->render('inspection');
		}
	}
	
	/**
	 * setup the search criteria for the properties for inspection
	 * @return array
	 */
	public function searchCriteria(){
		$conditions = array();
		/*
		 * db_status:
		 * 0 active
		 * 1 deleted
		 */
		$conditions[] = 'Listing.db_status = 0';
		//single office
		$conditions[] = 'Listing.office_id IN (1)';
		
		$conditions[] = "unix_timestamp(LtInsp.insp_start) >= '".time()."'";
		return $conditions;
	}
}
