<?php
App::uses('AppController', 'Controller');
/**
 * Members Controller
 *
 * @property Member $Member
 */
class MembersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML');
	
	/**
	 * include the other tables
	 * @var array
	 */
	public $uses = array('Member', 'GlobalStatus');

	/**
	 * show the Staff List page
	 * @return void
	 */
	public function team(){
		$staff = $this->Member->find('all', array(
			'conditions'=>'Member.mem_id > 1', 
			'order'=>'Member.job_pos_id'
		));
		$job_title = $this->GlobalStatus->find('all', array(
			'conditions'=>"GlobalStatus.fd_name LIKE 'job_pos_id'", 
			'order'=>'GlobalStatus.status_val'
		));
		$this->set('staff', $staff);
		$this->set('job_title', $this->relations('GlobalStatus', 'status_val', 'status_mean', $job_title));
		$this->set('bodyClass', 'staff');
	}
	

	/**
	 * show the Staff Profile page
	 * @return void
	 */
	public function profile($id){
		$staff = $this->Member->find('first', array(
			'conditions'=>"Member.mem_uid LIKE '".$id."'"
		));
		$this->set('staff', $staff);
		$this->set('bodyClass', 'profiles');
	}
	
	/**
	 * the function generates the vcard which can be downloaded and shows the details of the staff
	 * @param string|int $id
	 * @return void
	 */
	public function vcard($id){
		$this->autoRender = false;
		$staff = $this->Member->find('first', array(
			'conditions'=>"Member.mem_id = ".$id
		));
		if(sizeof($staff['Member'])){
			header("Content-type: application/octet-stream");
			header("Content-Disposition: attachment; filename=\"agent_".$staff['Member']['first_name']."_".$staff['Member']['last_name'].".vcf\"");
			
			echo "BEGIN:VCARD\r\n";
			echo "VERSION:2.1\r\n";
			echo "N:".$staff['Member']['last_name'].";".$staff['Member']['first_name']."\r\n
				FN:".$staff['Member']['first_name']." ".$staff['Member']['last_name']."\r\n
				ORG:".$staff['Office']['office_name']."\r\n
				TEL;WORK;VOICE:".$staff['Member']['phone']."\r\n
				TEL;CELL;VOICE:".$staff['Member']['mobile']."\r\n
				TEL;WORK;FAX:".$staff['Member']['fax']."\r\n
				ADR;WORK:;;".$staff['Office']['address']." ;".$staff['Office']['suburb_name']."\r\n
				LABEL;WORK;ENCODING=QUOTED-PRINTABLE:".$staff['Office']['address']." =0D=0A".$staff['Office']['suburb_name']."\r\n
				EMAIL;PREF;INTERNET:".$staff['Member']['email']."\r\n
				REV:".date("Ymd\THis\Z", time())."\r\n";
			echo "END:VCARD";
		}
		
	}
	
	
	/**
	 * create a new array that $key points to $val according to the given array $relations
	 * @param string $model
	 * @param string $key
	 * @param string $val
	 * @param array $relations
	 * @return array
	 */
	public function relations($model, $key, $val, $relations){
		$map = array();
		foreach($relations as $rel){
			$map[$rel[$model][$key]] = $rel[$model][$val];
		}
		return $map;
	}

}
