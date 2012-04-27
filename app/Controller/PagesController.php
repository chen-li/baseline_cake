<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Pages';

	/**
	 * Default helper
	 *
	 * @var array
	 */
	public $helpers = array('Html', 'Session');

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @return void
	 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
	}

	/**
	 * show the home page
	 * @return void
	 */
	public function initialization(){
		$this->set('title_for_layout', 'NSW Properties For Lease - search here for current Sutherland Shire Rental Properties');
		$this->loadModel('Listing');
		$condition = array(
			'conditions' => array(
				'Listing.db_status' => '0',
				'Listing.office_id' => array('1'),
				'Listing.lt_status NOT IN (6,1,7,10)',
				'Listing.lt_hvset & '.pow(2,14).'='.pow(2,14),
			),
			'order' => array('Listing.last_mod DESC'),
			'limit' => 2
		);
		//show featured property
		$fp_lt = $this->Listing->find('all', $condition);

		for($i=0;$i<sizeof($fp_lt);$i++){
			$photo = '';
			if (($fp_lt[$i]['Listing']['lt_hvset'] & 2)==2){
				$photo = Router::url('/', true)."media/lt/".$fp_lt[$i]['Listing']['office_id']."/".$fp_lt[$i]['Listing']['lt_uid']."/m-rsc.jpg";
				if (round($fp_lt[$i]['Listing']['lt_hvset'] & pow(2, 17))==pow(2, 17)){
					$photo = Router::url('/', true)."media/lt/".$fp_lt[$i]['Listing']['office_id']."/".$fp_lt[$i]['Listing']['lt_uid']."/cm-rsc.jpg";
				}
			}
			$fp_lt[$i]['Listing']['photo_path'] = $photo;
			
			$address = $fp_lt[$i]['Listing']['address'].', ';
			if (round($fp_lt[$i]['Listing']['lt_hvset'] & pow(2,12))==pow(2,12))
				$address = '';
			$address .= ucwords(strtolower($fp_lt[$i]['Listing']['suburb_name']));
			$fp_lt[$i]['Listing']['web_address'] = $address;
			
			$price = (round($fp_lt[$i]['Listing']['lt_hvset'] & pow(2,7))==pow(2,7))?$fp_lt[$i]['Listing']['disp_rent']:$fp_lt[$i]['Listing']['disp_price'];
			$fp_lt[$i]['Listing']['web_price'] = $price;
		}
		$this->set('featureProperties', $fp_lt);
		$this->set('bodyClass', 'home');
		$this->set('quickSearch', $this->quickSearch());
	}
	
	/**
	 * collect the info of the categories and the suburbs for the 4 options in the quick search form
	 * @return array
	 */
	public function quickSearch(){
		$select_buying = $this->catgSearch('available','buying');
		$select_renting = $this->catgSearch('available','renting');
		$select_sold = $this->catgSearch('sold','buying');
		$select_leased = $this->catgSearch('leased','renting');
		$qs = array();
		$qs['buy'] = $this->catgSuburbOption($select_buying);
		$qs['rent'] = $this->catgSuburbOption($select_renting);
		$qs['sold'] = $this->catgSuburbOption($select_sold);
		$qs['leased'] = $this->catgSuburbOption($select_leased);
		//pr($qs);
		return $qs;
	}
	
	/**
	 * count the categories and suburbs for the quick search form
	 * @param array $selection
	 * @return array
	 */
	public function catgSuburbOption($selection){
		$catg = array();
		$suburb = array();
		foreach($selection as $sel){
			if(!array_key_exists($sel['PCatg']['pcatg_id'], $catg)){
				$catg[$sel['PCatg']['pcatg_id']] = $sel['PCatg']['pcatg_name'];
			}
			if(!array_key_exists($sel['Suburb']['suburb_id'], $suburb)){
				$suburb[$sel['Suburb']['suburb_id']] = $sel['Suburb']['suburb_name'];
			}
		}
		return array('catg'=>$catg, 'suburb'=>$suburb);
	}
	
	/**
	 * collect the info of categories which are for sale, for rent, for sold and for leased
	 * @param $status
	 * @param $sale_type
	 * @return array
	 */
	public function catgSearch($status,$sale_type){
		$condition = array(
			'fields' => array('PCatg.pcatg_name', 'PCatg.pcatg_id', 'Suburb.suburb_id', 'Suburb.suburb_name'),
			'conditions' => $this->quickSearchCriteria($status, $sale_type)
		);
		return $this->Listing->find('all', $condition);
	}
	
	/**
	 * setup the search criteria for quick search form
	 * @param string|int $status
	 * @param string $sale_type
	 * @return array
	 */
	public function quickSearchCriteria($status,$sale_type='buying'){
		$cond = array();
		
		switch($status){
			case 'sold':
				$cond[] = 'Listing.lt_status IN (2)';
				break;
			case 'leased':
				$cond[] = 'Listing.lt_status IN (3)';
				break;
			default:
				$cond[] = 'Listing.lt_status IN (0,4,8,9)';
		}
		
		switch($sale_type){
			case 'renting':
				$cond[] = 'Listing.lt_hvset & '.pow(2,7).'='.pow(2,7);
				break;
			case 'buying':
			default:
				$cond[] = 'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6);
		}
		
		$cond[] = 'Listing.office_id IN (1)';
		$cond[] = 'Listing.db_status = 0';
		
		return $cond;
	}
	
	/**
	 * the cms text page of Buying Tips
	 * @return void
	 */
	public function buyingTips(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Selling Tips
	 * @return void
	 */
	public function sellingTips(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Guide To Renting
	 * @return void
	 */
	public function guideToRenting(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Useful Links
	 * @return void
	 */
	public function usefulLinks(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Calculators
	 * @return void
	 */
	public function calculators(){
		$this->set('bodyClass', 'cms calculator');
	}
	
	/**
	 * the cms text page of Newsletters
	 * @return void
	 */
	public function newsletters(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Company Profile
	 * @return void
	 */
	public function companyProfile(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Testimonials
	 * @return void
	 */
	public function testimonials(){
		$this->set('bodyClass', 'cms');
	}
	
	/**
	 * the cms text page of Careers
	 * @return void
	 */
	public function careers(){
		$this->set('bodyClass', 'cms');
	}
}
