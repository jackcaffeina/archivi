<?php
App::uses('AppController', 'Controller');
/**
 * Documenttypes Controller
 *
 * @property Documenttype $Documenttype
 */
class DocumenttypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Documenttype->recursive = 0;
		$this->set('documenttypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Documenttype->id = $id;
		if (!$this->Documenttype->exists()) {
			throw new NotFoundException(__('Invalid documenttype'));
		}
		$this->loadModel('Type');
		$this->unbindAllModels('Type');
		$this->set('documenttype', $this->Documenttype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Documenttype->create();
			if ($this->Documenttype->save($this->request->data)) {
				$this->Session->setFlash(__('The documenttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documenttype could not be saved. Please, try again.'));
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
		$this->Documenttype->id = $id;
		if (!$this->Documenttype->exists()) {
			throw new NotFoundException(__('Invalid documenttype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Documenttype->save($this->request->data)) {
				$this->Session->setFlash(__('The documenttype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documenttype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Documenttype->read(null, $id);
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
		$this->Documenttype->id = $id;
		if (!$this->Documenttype->exists()) {
			throw new NotFoundException(__('Invalid documenttype'));
		}
		if ($this->Documenttype->delete()) {
			$this->Session->setFlash(__('Documenttype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Documenttype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
