<?php
class PlacesController extends AppController {

	var $name = 'Places';

	function index() {
		$this->Place->recursive = 0;
		$this->set('places', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid place', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('place', $this->Place->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Place->create();
			if ($this->Place->save($this->data)) {
				$this->Session->setFlash(__('The place has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The place could not be saved. Please, try again.', true));
			}
		}
		$countries = $this->Place->Country->find('list');
		$cities = $this->Place->City->find('list');
		$this->set(compact('countries', 'cities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid place', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Place->save($this->data)) {
				$this->Session->setFlash(__('The place has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The place could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Place->read(null, $id);
		}
		$countries = $this->Place->Country->find('list');
		$cities = $this->Place->City->find('list');
		$this->set(compact('countries', 'cities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for place', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Place->delete($id)) {
			$this->Session->setFlash(__('Place deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Place was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
