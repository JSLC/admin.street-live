<?php
class BloodsController extends AppController {

	var $name = 'Bloods';

	function index() {
		$this->Blood->recursive = 0;
		$this->set('bloods', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid blood', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('blood', $this->Blood->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Blood->create();
			if ($this->Blood->save($this->data)) {
				$this->Session->setFlash(__('The blood has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blood could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid blood', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Blood->save($this->data)) {
				$this->Session->setFlash(__('The blood has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blood could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Blood->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for blood', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Blood->delete($id)) {
			$this->Session->setFlash(__('Blood deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Blood was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
