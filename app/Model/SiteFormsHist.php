<?php
App::uses('AppModel', 'Model');
/**
 * SiteFormsHist Model
 *
 */
class SiteFormsHist extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'site_forms_hist';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'form_id';
}
