<?php
App::uses('AppController', 'Controller');
/**
 * Listings Controller
 *
 */
class ListingsController extends AppController {
	
/*	var $paginate=array(
    'Game'=>
	array(
        'joins'=>array(
	array('table'=>'competitions',
                  'alias'=>'Competition2',
                  'type'=>'left',
                  'conditions'=>array('Game.competition_id=Competition2.competition_id')
	),
	array('table'=>'teams',
                  'alias'=>'Team2',
                  'type'=>'left',
                  'conditions'=>array('Competition2.team_id=Team2.team_id')
	),
	),
        'order'=>array('game_date'=>'asc'),
        'contains'=>array('Competition2'=>array('Team2'))
	));
	function index() {
		$datum = date('Y-m-d H:m');
		$this->Game->recursive = 0;
		$scope=array('OR' => array(array('Team2.sport_id' => 2), array('Team2.sport_id' =>3)), 'Game.game_date >' => $datum);
		//       Configure::write('debug',2);
		$this->set('games', $this->paginate(null,$scope));
	}*/
	
	public $paginate;
	public $helpers = array('HTML', 'session', 'Paginator');
	
/*
 * Listing index page
 */
	
	public function index() {
		$this->paginate = array(
				'limit' => 6,
				'order' => 'Listing.last_mod DESC'
		);
		$cond = array(
			'Listing.db_status = 0',
			'Listing.office_id IN (1)',
			'Listing.lt_status IN (0,4,8,9)',
			'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6),
		);
		/*
		if(isset($this->params['named']['sort'])){//user clicked on a "sort by" link, write his choice to the session
			$this->Session->write('listing_sort', array($this->params['named']['sort']=>$this->params['named']['direction']));
		} else if($this->Session->check('listing_sort')){
			$this->paginate['order'] = $this->Session->read('listing_sort');
		}*/
		$lt = $this->paginate('Listing', $cond);
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		$this->set('listings', $lt);
		$this->set('GetMapListingData', $this->GetMapListingData($lt));
		$this->set('search_title', 'Property For Sale');
		$this->set('heading', 'Sale');
		$this->set('bodyClass', 'listings');
		$this->render('listings');
	}
	
/*
 *	Residential listings
 */
	public function residential() {
		$this->paginate = array(
				'limit' => 6,
				'order' => 'Listing.last_mod DESC'
		);
		$cond = array(
			'Listing.db_status = 0',
			'Listing.office_id IN (1)',
			'Listing.lt_status IN (0,4,8,9)',
			'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6),
			'Listing.lt_trade' => '1'
		);
		/*
		if(isset($this->params['named']['sort'])){//user clicked on a "sort by" link, write his choice to the session
			$this->Session->write('listing_sort', array($this->params['named']['sort']=>$this->params['named']['direction']));
		} else if($this->Session->check('listing_sort')){
			$this->paginate['order'] = $this->Session->read('listing_sort');
		}*/
		$lt = $this->paginate('Listing', $cond);
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		$this->set('listings', $lt);
		$this->set('GetMapListingData', $this->GetMapListingData($lt));
		$this->set('search_title', 'Residential For Sale');
		$this->set('heading', 'Sale');
		$this->set('bodyClass', 'listings');
		$this->render('listings');
	}
	
/*
 *	Commercial listings
 */
	public function commercial() {
		$this->paginate = array(
				'limit' => 6,
				'order' => 'Listing.last_mod DESC'
		);
		$cond = array(
			'Listing.db_status = 0',
			'Listing.office_id IN (1)',
			'Listing.lt_status IN (0,4,8,9)',
			'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6),
			'Listing.lt_trade' => '2'
		);
		/*
		if(isset($this->params['named']['sort'])){//user clicked on a "sort by" link, write his choice to the session
			$this->Session->write('listing_sort', array($this->params['named']['sort']=>$this->params['named']['direction']));
		} else if($this->Session->check('listing_sort')){
			$this->paginate['order'] = $this->Session->read('listing_sort');
		}*/
		$lt = $this->paginate('Listing', $cond);
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		$this->set('listings', $lt);
		$this->set('GetMapListingData', $this->GetMapListingData($lt));
		$this->set('search_title', 'Commercial For Sale');
		$this->set('heading', 'Sale');
		$this->set('bodyClass', 'listings');
		$this->render('listings');
	}
	
/*
 *	Land listings
 */
	public function land() {
		$this->paginate = array(
				'limit' => 6,
				'order' => 'Listing.last_mod DESC'
		);
		$cond = array(
			'Listing.db_status = 0',
			'Listing.office_id IN (1)',
			'Listing.lt_status IN (0,4,8,9)',
			'Listing.lt_catg IN (5)',
			'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6)
		);
		/*
		if(isset($this->params['named']['sort'])){//user clicked on a "sort by" link, write his choice to the session
			$this->Session->write('listing_sort', array($this->params['named']['sort']=>$this->params['named']['direction']));
		} else if($this->Session->check('listing_sort')){
			$this->paginate['order'] = $this->Session->read('listing_sort');
		}*/
		$lt = $this->paginate('Listing', $cond);
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		$this->set('listings', $lt);
		$this->set('GetMapListingData', $this->GetMapListingData($lt));
		$this->set('search_title', 'Land For Sale');
		$this->set('heading', 'Sale');
		$this->set('bodyClass', 'listings');
		$this->render('listings');
	}

/*
 * never render the views
 */
	
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
	
	//todo
	public function GetMapListingData($listings) {
		$map_listing = array();
		foreach($listings as $i => $lt){
			//showing non-address-hidden properties
			if ($lt['Listing']['address'] && round($lt['Listing']['lt_hvset'] & pow(2,12))<>pow(2,12)){
	
				$map_listing['lt_lat'][$i] = $lt['Listing']['lt_lat'];
				$map_listing['lt_log'][$i] = $lt['Listing']['lt_log'];
				$map_listing['full_address'][$i] = htmlspecialchars($lt['Listing']['address'][$i].", ".$lt['Listing']['suburb_name'].", ".$lt['State']['state_sname'].", Australia",ENT_QUOTES);
				$map_listing['address'][$i] = htmlspecialchars($lt['Listing']['address'],ENT_QUOTES);
				$map_listing['suburb'][$i] = htmlspecialchars($lt['Listing']['suburb_name'],ENT_QUOTES);
				if (round($lt['Listing']['lt_hvset'] & pow(2,7))==pow(2,7)) {
					$map_listing['price'][$i] =  htmlspecialchars($lt['Listing']['disp_rent'],ENT_QUOTES);
				} else {
					$map_listing['price'][$i] = htmlspecialchars($lt['Listing']['disp_price'],ENT_QUOTES);
				}
				$map_listing['headline'][$i] = str_replace("\n", " ", htmlspecialchars(substr($lt['Listing']['lt_headline'], 0, 70),ENT_QUOTES));
	
				$divider = '';
	
				$ls = ($lt['Listing']['lt_trade'] == 2 && $lt['Listing']['lt_catg'] != 5)?$lt['Listing']['build_size']:$lt['Listing']['land_size'];
				$map_listing['photo'][$i] = '/img/mapview_nophoto.gif';
				if (round($lt['Listing']['lt_hvset'] & 2)==2){
					$map_listing['photo'][$i] = htmlspecialchars(Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/m-rsc.jpg", ENT_QUOTES);
					if (round($lt['Listing']['lt_hvset'] & pow(2, 17))==pow(2, 17)){
						$map_listing['photo'][$i] = htmlspecialchars(Router::url('/', true)."media/lt/".$lt['Listing']['office_id']."/".$lt['Listing']['lt_uid']."/cm-rsc.jpg",ENT_QUOTES);
					}
				}
	
				$map_listing['DetailsLink'][$i] =  htmlspecialchars('');
	
	
				$map_listing['BookmarkLink'][$i] = htmlspecialchars('');
			}
		}
		if(sizeof($map_listing['address']) == 0) {
			$map_listing['no_record'][1] = true;
			$map_listing['office_name'][1] = $lt['Office']['office_name'];
			$map_listing['lt_lat'][1] = $lt['Office']['geo_lat'];
			$map_listing['lt_log'][1] = $lt['Office']['geo_log'];
			$map_listing['full_address'][1] = htmlspecialchars($lt['Office']['address']." ".$lt['Office']['suburb_name']." ".$lt['Office']['postcode']." ".$lt['Office']['country_lname'], ENT_QUOTES);
			return $map_listing;
		}else {
			$map_listing['no_record'][1] = false;
			return $map_listing;
		}
		
		$this->autoRender = false;
	}
}
