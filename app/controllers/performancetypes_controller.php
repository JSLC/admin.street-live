<?php
class PerformancetypesController extends AppController {

	var $name = 'Performancetypes';

	function index() {
		$this->Performancetype->recursive = 0;
		$this->set('performancetypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid performancetype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('performancetype', $this->Performancetype->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Performancetype->create();
			if ($this->Performancetype->save($this->data)) {
				$this->Session->setFlash(__('The performancetype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performancetype could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performancetype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Performancetype->save($this->data)) {
				$this->Session->setFlash(__('The performancetype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performancetype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Performancetype->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performancetype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Performancetype->delete($id)) {
			$this->Session->setFlash(__('Performancetype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performancetype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
