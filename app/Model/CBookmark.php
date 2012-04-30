<?php
App::uses('AppModel', 'Model');
/**
 * CBookmark Model
 *
 */
class CBookmark extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'c_bookmark';
	

	/**
	 * validate form elements
	 * @var array
	 */
	public $validate = array(
        'cid' => array(
            'rule' => 'notEmpty'
        ),
        'lt_id' => array(
            'rule' => 'notEmpty'
        )
    );
}
