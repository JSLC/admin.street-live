<?php
class PerformersController extends AppController {

	var $name = 'Performers';

	function index() {
		$this->Performer->recursive = 0;
		$this->set('performers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid performer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('performer', $this->Performer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Performer->create();
			if ($this->Performer->save($this->data)) {
				$this->Session->setFlash(__('The performer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performer could not be saved. Please, try again.', true));
			}
		}
		$performertypes = $this->Performer->Performertype->find('list');
		$members = $this->Performer->Member->find('list');
		$this->set(compact('performertypes', 'members'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Performer->save($this->data)) {
				$this->Session->setFlash(__('The performer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Performer->read(null, $id);
		}
		$performertypes = $this->Performer->Performertype->find('list');
		$members = $this->Performer->Member->find('list');
		$this->set(compact('performertypes', 'members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Performer->delete($id)) {
			$this->Session->setFlash(__('Performer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
