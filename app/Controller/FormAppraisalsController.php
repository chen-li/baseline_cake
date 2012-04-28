<?php
App::uses('AppController', 'Controller');
/**
 * FormAppraisals Controller
 *
 * @property FormAppraisal $FormAppraisal
 */
class FormAppraisalsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML', 'session', 'Form');


	public function form(){
		$this->loadModel('PCatg');
		$catg = $this->PCatg->find('all', array('conditions'=>'PCatg.in_trade_set & POW(2,1) = POW(2,1)'));
		$this->set('catgs', $catg);
		$this->set('bodyClass', 'forms');
		pr($this->request->data);
		$this->FormAppraisal->save($this->request->data);
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormAppraisal->recursive = 0;
		$this->set('formAppraisals', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FormAppraisal->id = $id;
		if (!$this->FormAppraisal->exists()) {
			throw new NotFoundException(__('Invalid form appraisal'));
		}
		$this->set('formAppraisal', $this->FormAppraisal->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormAppraisal->create();
			if ($this->FormAppraisal->save($this->request->data)) {
				$this->Session->setFlash(__('The form appraisal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form appraisal could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FormAppraisal->id = $id;
		if (!$this->FormAppraisal->exists()) {
			throw new NotFoundException(__('Invalid form appraisal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormAppraisal->save($this->request->data)) {
				$this->Session->setFlash(__('The form appraisal has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form appraisal could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormAppraisal->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->FormAppraisal->id = $id;
		if (!$this->FormAppraisal->exists()) {
			throw new NotFoundException(__('Invalid form appraisal'));
		}
		if ($this->FormAppraisal->delete()) {
			$this->Session->setFlash(__('Form appraisal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Form appraisal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
