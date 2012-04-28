<?php
App::uses('AppController', 'Controller');
/**
 * SiteFormsHists Controller
 *
 * @property SiteFormsHist $SiteFormsHist
 */
class SiteFormsHistsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('HTML', 'session', 'Form');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SiteFormsHist->recursive = 0;
		$this->set('siteFormsHists', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SiteFormsHist->id = $id;
		if (!$this->SiteFormsHist->exists()) {
			throw new NotFoundException(__('Invalid site forms hist'));
		}
		$this->set('siteFormsHist', $this->SiteFormsHist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SiteFormsHist->create();
			if ($this->SiteFormsHist->save($this->request->data)) {
				$this->Session->setFlash(__('The site forms hist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site forms hist could not be saved. Please, try again.'));
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
		$this->SiteFormsHist->id = $id;
		if (!$this->SiteFormsHist->exists()) {
			throw new NotFoundException(__('Invalid site forms hist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SiteFormsHist->save($this->request->data)) {
				$this->Session->setFlash(__('The site forms hist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site forms hist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SiteFormsHist->read(null, $id);
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
		$this->SiteFormsHist->id = $id;
		if (!$this->SiteFormsHist->exists()) {
			throw new NotFoundException(__('Invalid site forms hist'));
		}
		if ($this->SiteFormsHist->delete()) {
			$this->Session->setFlash(__('Site forms hist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site forms hist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
