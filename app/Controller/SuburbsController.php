<?php
App::uses('AppController', 'Controller');
/**
 * Suburbs Controller
 *
 * @property Suburb $Suburb
 */
class SuburbsController extends AppController {
	
	/**
	 * return the info for the Property Alert page to establish the dropdown menu of the autocomplete function
	 * @return void
	 */
	public function fastSearch(){
		$this->autoRender = false;
		if(isset($this->params->query['query']) && strlen($this->params->query['query'])>=3){
			$keyword = $this->params->query['query'];
			
			$cond = array(
				'fields' => array(
					'Suburb.suburb_name as result',
					'Suburb.suburb_id as id'
				),
				'conditions' => array("Suburb.suburb_name LIKE '%".$keyword."%'"),
				'order' => 'Suburb.suburb_name'
			);
			$results = $this->Suburb->find('all', $cond);
			
			
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
			if(!array_key_exists($sel['Suburb']['result'], $result)){
				$result[$sel['Suburb']['result']] = $i;
				$id[$sel['Suburb']['id']] = $i;
				$i++;
			}
		}
		return array('result'=>array_flip($result), 'id'=>array_flip($id));
	}

}
