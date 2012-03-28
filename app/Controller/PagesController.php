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
	 * render the home page
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
	}
}
