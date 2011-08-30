<?php
class PerformersMembersController extends AppController {

	var $name = 'PerformersMembers';

	function index() {
		$this->PerformersMember->recursive = 0;
		$this->set('performersMembers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid performers member', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('performersMember', $this->PerformersMember->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PerformersMember->create();
			if ($this->PerformersMember->save($this->data)) {
				$this->Session->setFlash(__('The performers member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performers member could not be saved. Please, try again.', true));
			}
		}
		$performers = $this->PerformersMember->Performer->find('list');
		$members = $this->PerformersMember->Member->find('list');
		$this->set(compact('performers', 'members'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performers member', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PerformersMember->save($this->data)) {
				$this->Session->setFlash(__('The performers member has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performers member could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PerformersMember->read(null, $id);
		}
		$performers = $this->PerformersMember->Performer->find('list');
		$members = $this->PerformersMember->Member->find('list');
		$this->set(compact('performers', 'members'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performers member', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PerformersMember->delete($id)) {
			$this->Session->setFlash(__('Performers member deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performers member was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
