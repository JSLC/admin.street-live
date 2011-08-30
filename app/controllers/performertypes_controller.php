<?php
class PerformertypesController extends AppController {

	var $name = 'Performertypes';

	function index() {
		$this->Performertype->recursive = 0;
		$this->set('performertypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid performertype', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('performertype', $this->Performertype->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Performertype->create();
			if ($this->Performertype->save($this->data)) {
				$this->Session->setFlash(__('The performertype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performertype could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performertype', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Performertype->save($this->data)) {
				$this->Session->setFlash(__('The performertype has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performertype could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Performertype->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performertype', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Performertype->delete($id)) {
			$this->Session->setFlash(__('Performertype deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performertype was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
