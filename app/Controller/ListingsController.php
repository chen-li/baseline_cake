<?php
App::uses('AppController', 'Controller');
/**
 * Listings Controller
 *
 */
class ListingsController extends AppController {
	
	public function index() {

	}

	public function residential(){
		$this->set('search_title', 'Property For Sale');
		$this->set('heading', 'Sale');
		$lt = $this->Listing->find('all');
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		//pr($lt);
		$this->set('listings', $lt);
		$this->render('listings');
	}

	public function getAddress(&$listings){
		for($i=0;$i<sizeof($listings);$i++){
			$listings[$i]['Listing']['address'] .= ", ";
			if ($listings[$i]['Listing']['address'] && round($listings[$i]['Listing']['lt_hvset'] & pow(2,12)) == pow(2,12)){
				$listings[$i]['Listing']['address'] = "";
			}
		}
		$this->autoRender = false;
	}

	public function getListingPrice(&$listings){
		for($i=0;$i<sizeof($listings);$i++){
			if(isset($listings[$i]['ExLtRecord'][0]['ex_val'])){
				$ex_val_unseri = unserialize($listings[$i]['ExLtRecord'][0]['ex_val']);
			}
			$price = (round($listings[$i]['Listing']['lt_hvset'] & pow(2,7))==pow(2,7))?$listings[$i]['Listing']['disp_rent']:$listings[$i]['Listing']['disp_price'];
			//display pa,pm after rent price
			if (round($listings[$i]['Listing']['lt_hvset'] & pow(2,7))==pow(2,7)){
				if(isset($ex_val_unseri['0x12'])){
					$un_0x12 = $ex_val_unseri['0x12'];  //Array ( [per] => 0 [price] => 500 [psqm] => [dper] => 1 )
					$option_0x12 = array('0'=>'', '1'=>'pw', '2'=>'pm', '3'=>'pa', '4'=>'pd'); //
					$price .= '&nbsp;'.$option_0x12[$un_0x12['dper']];
				}
			}
			//auction check
			if (($listings[$i]['Listing']['lt_hvset'] & POW(2,11)) == POW(2,11) && 
				($listings[$i]['Listing']['lt_hvset'] & POW(2,6)) == POW(2,6) && 
				!in_array($listings[$i]['Listing']['lt_status'], array(2,5))) {
				//$price = "Auction: ".date('l, d F h:iA', $listings[$i]['Listing']['auction_date']).' '.$listings[$i]['Listing']['auction_time'];//." ".$auc_v;
			}

			$price = ($listings[$i]['Listing']['lt_status'] == 2 || $listings[$i]['Listing']['lt_status'] == 3)?"":$price;
			$listings[$i]['Listing']['web_price'] = $price;
		}
		$this->autoRender = false;
	}
}
