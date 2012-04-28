<?php
App::uses('AppModel', 'Model');
/**
 * FormContact Model
 *
 */
class FormContact extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'form_contact';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'form_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
}
