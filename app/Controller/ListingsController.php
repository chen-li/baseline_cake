<?php
App::uses('AppController', 'Controller');
/**
 * Listings Controller
 *
 */
class ListingsController extends AppController {
	
	public $paginate;
	public $helpers = array('HTML', 'session', 'Paginator');
	
	/**
	 * the listings page which shows all the properties according to the search criteria
	 * @param $sale_type
	 * @return void
	 */
	public function index() {
		$this->paginate = array(
				'limit' => 6,
				'order' => 'Listing.last_mod DESC'
		);
		//debug($this->params);
		$cond = $this->searchCriteria($this->params['data'], $this->params['pass'], $this->params['named']);
		$lt = $this->paginate('Listing', $cond);
		$this->getAddress($lt);
		$this->getListingPrice($lt);
		$this->set('listings', $lt);
		$this->set('GetMapListingData', $this->GetMapListingData($lt));
		$this->set('search_title', $this->searchTitle($this->params['pass']));
		$this->set('heading', $this->pageHeading($this->params['pass']));
		$this->set('bodyClass', 'listings');
		$this->render('listings');
	}
	
	/**
	 * show the Auction Timetables page
	 * @return void
	 */
	public function auction(){
		$data = array('auction_date'=>time());
		$cond = array(
			'conditions' => $this->searchCriteria($data)
		);
		$lt = $this->Listing->find('all', $cond);
		$this->set('listings', $lt);
		$this->set('bodyClass', 'inspections');
	}
	
	/**
	 * return the info to establish the dropdown menu of the autocomplete function
	 * @return void
	 */
	public function fastSearch(){
		$this->autoRender = false;
		if(isset($this->params->query['query']) && strlen($this->params->query['query'])>=3){
			$keyword = $this->params->query['query'];
			
			if(eregi("[0-9]+P[0-9]*$", $keyword)){
				$keyfield = "lt_uid";
				$data['lt_uid'] = $keyword;
				$cond = array(
					'fields' => array(
						'Listing.lt_uid as result',
						'Listing.lt_id as id'
					),
					'conditions' => $this->searchCriteria($data),
					'order' => 'Listing.lt_uid'
				);
				$results = $this->Listing->find('all', $cond);
			}else {
				$keyfield = "suburb_name";
				$data['suburbs'] = $keyword;
				$cond = array(
					'fields' => array(
						'Listing.suburb_name as result',
						'Listing.suburb_id as id'
					),
					'conditions' => $this->searchCriteria($data),
					'order' => 'Listing.suburb_name'
				);
				$results = $this->Listing->find('all', $cond);
			}
			
			$chk_keyword = $this->fastSearchOption($results);
			$found = array(
				'query'=>$keyword,
				'suggestions'=>$chk_keyword['result'],
				'data'=>$chk_keyword['id']
			);
		}
		
		header('Content-type: application/json');
		echo json_encode($found);
	}
	
	/**
	 * count the results for the fast search form
	 * @param array $selection
	 * @return array
	 */
	public function fastSearchOption($selection){
		$result = array();
		$id = array();
		$i = 0;
		foreach($selection as $sel){
			if(!array_key_exists($sel['Listing']['result'], $result)){
				$result[$sel['Listing']['result']] = $i;
				$id[$sel['Listing']['id']] = $i;
				$i++;
			}
		}
		return array('result'=>array_flip($result), 'id'=>array_flip($id));
	}
	
	/**
	 * setup the search criteria
	 * @param array $data
	 * @param array $pass 
	 * @param array $named
	 * @return array
	 */
	public function searchCriteria($data=array(), $pass=array(), $named=array()){
		$conditions = array();
		//check trade type if it is residential or commercial
		if(in_array('residential', $pass)){
			$conditions['Listing.lt_trade'] = '1';//1 is residential
		}
		if(in_array('commercial', $pass)){
			$conditions['Listing.lt_trade'] = '2';//2 is commercial
		}
		//check if the properties for sale or for rent
		if(in_array('renting', $pass)){//for rent
			$conditions[] = 'Listing.lt_hvset & '.pow(2,7).'='.pow(2,7);
		}else {//for sale
			$conditions[] = 'Listing.lt_hvset & '.pow(2,6).'='.pow(2,6);
		}
		/*
		 * db_status:
		 * 0 active
		 * 1 deleted
		 */
		$conditions[] = 'Listing.db_status = 0';
		//single office
		$conditions[] = 'Listing.office_id IN (1)';
		/*
		 * lt_status:
		 * 0 available
		 * 1 appraisal
		 * 2 sold
		 * 3 leased
		 * 4 deposit taken
		 * 5 exchanged
		 * 6 offline
		 * 7 prospect
		 * 8 under offer
		 * 9 under contract
		 * 10 listing presentation
		 */
		if(!isset($named['status'])){
			$named['status'] = 'default';
		}
		switch($named['status']){
			case '2':
				$conditions[] = 'Listing.lt_status IN (2)';
				break;
			case '3':
				$conditions[] = 'Listing.lt_status IN (3)';
				break;
			default:
				$conditions[] = 'Listing.lt_status IN (0,4,8,9)';
		}
		//price from
		if(isset($data['price_fm']) && is_numeric($data['price_fm'])){
			$conditions[] = "Listing.price >='".$data['price_fm']."'";
		}
		//price to
		if(isset($data['price_to']) && is_numeric($data['price_to'])){
			$conditions[] = "Listing.price <='".$data['price_to']."'";
		}
		//search bed
		if(isset($data['bed_fm']) && is_numeric($data['bed_fm'])){
			$conditions[] = "Listing.bed >='".$data['bed_fm']."'";
		}
		//search bath
		if(isset($data['bath_fm']) && is_numeric($data['bath_fm'])){
			$conditions[] = "Listing.bath >='".$data['bath_fm']."'";
		}
		//search car
		if(isset($data['car_fm']) && is_numeric($data['car_fm'])){
			$conditions[] = "Listing.car >='".$data['car_fm']."'";
		}
		//search categroy
		if(isset($data['catg']) && is_array($data['catg']) && sizeof($data['catg'])){
			$conditions[] = "Listing.lt_catg IN (".implode(",", $data['catg']).")";
		}
		//search suburbs
		if(isset($data['suburbs']) && is_array($data['suburbs']) && sizeof($data['suburbs'])){
			$conditions[] = "Listing.suburb_id IN (".implode(",", $data['suburbs']).")";
		}
		//search the properties for auction
		if(isset($data['auction_date']) && is_numeric($data['auction_date'])){
			$conditions[] = "unix_timestamp(Listing.auction_date) >= '".$data['auction_date']."'";
		}
		//wild search property id
		if(isset($data['lt_uid'])){
			$conditions[] = "Listing.lt_uid LIKE '%".$data['lt_uid']."%'";
		}
		//wild search suburb id
		if(isset($data['suburbs'])){
			$conditions[] = "Listing.suburb_name LIKE '%".$data['suburbs']."%'";
		}
		
		//fast search property id or suburb id
		if(isset($data['Keyword']) && (eregi("[0-9]+P[0-9]*$", $data['Keyword'])) && isset($data['suburb_id'])){//search by property id
			$conditions[] = "Listing.lt_id IN (".$data['suburb_id'].")";
		}else if(isset($data['Keyword']) && !(eregi("[0-9]+P[0-9]*$", $data['Keyword'])) && isset($data['suburb_id'])){//search by suburb id
			$conditions[] = "Listing.suburb_id IN (".$data['suburb_id'].")";
		}
		
		
		return $conditions;
	}
	
	/**
	 * return the page title for the listings page
	 * @param array $pass
	 * @return string
	 */
	public function searchTitle($pass){
		if(in_array('residential', $pass)){
			return 'Residential For Sale';
		}else if(in_array('commercial', $pass)){
			return 'Commercial For Sale';
		}else if(in_array('land', $pass)){
			return 'Land For Sale';
		}else{
			return 'Property For Sale';
		}
	}
	
	/**
	 * check the heading of the page if it is for sale or for lease
	 * @param array $pass
	 * @return string
	 */
	public function pageHeading($pass){
		if(in_array('renting', $pass)){//for rent
			return 'Lease';
		}else {//for sale
			return 'Sale';
		}
	}
	
	
	/**
	 * show the details page
	 * @param $lt_uid
	 * @return void
	 */
	public function details($lt_uid = null){
		$condition = array(
			'conditions' => array(
				'Listing.lt_uid' => $lt_uid,
			),
			'contain' => array(
				'LtInsp' => array('conditions' => array('LtInsp.insp_start > NOW()')),
				'LtPhoto',
				'LtInsp',
				'ExLtRecord',
				'Member',
				'Office',
				'State',
				'Suburb',
				'Region',
				'PCatg',
			)
		);
	    if ($this->request->is('get')) {
	        $lt = $this->Listing->find('first', $condition);
	    }
	    $this->set('lt', $lt);
		$this->set('bodyClass', 'details');		
	}
	
	public function brochure($id){
		if(isset($id)){
			$data = array('lt_uid'=>$id);
		}
		$cond = array(
			'conditions' => $this->searchCriteria($data)
		);
		$lt = $this->Listing->find('first', $cond);
	    $this->set('lt', $lt);
		$this->render('brochure', 'ajax');
	}

	/**
	 * if bitwise lt_hvset 12 is true, hide the property address from the website
	 * @param array $listings
	 * @return void
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
	
	/**
	 * show the prices of the listings
	 * @param $listings
	 * @return void
	 */
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
	
	/**
	 * mark the properties on the google map
	 * @param array $listings
	 * @return array
	 */
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
