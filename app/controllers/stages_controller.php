<?php
class StagesController extends AppController {

	var $name = 'Stages';

	function index() {
		$this->Stage->recursive = 0;
		$this->set('stages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid stage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('stage', $this->Stage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Stage->create();
			if ($this->Stage->save($this->data)) {
				$this->Session->setFlash(__('The stage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Stage->Country->find('list');
		$cities = $this->Stage->City->find('list');
		$places = $this->Stage->Place->find('list');
		$this->set(compact('countries', 'cities', 'places'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid stage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Stage->save($this->data)) {
				$this->Session->setFlash(__('The stage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Stage->read(null, $id);
		}
		$countries = $this->Stage->Country->find('list');
		$cities = $this->Stage->City->find('list');
		$places = $this->Stage->Place->find('list');
		$this->set(compact('countries', 'cities', 'places'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for stage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Stage->delete($id)) {
			$this->Session->setFlash(__('Stage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Stage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
