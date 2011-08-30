<?php
class MoviesController extends AppController {

	var $name = 'Movies';

	function index() {
		$this->Movie->recursive = 0;
		$this->set('movies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid movie', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('movie', $this->Movie->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Movie->create();
			if ($this->Movie->save($this->data)) {
				$this->Session->setFlash(__('The movie has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.', true));
			}
		}
		$performances = $this->Movie->Performance->find('list');
		$this->set(compact('performances'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid movie', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Movie->save($this->data)) {
				$this->Session->setFlash(__('The movie has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Movie->read(null, $id);
		}
		$performances = $this->Movie->Performance->find('list');
		$this->set(compact('performances'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for movie', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Movie->delete($id)) {
			$this->Session->setFlash(__('Movie deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Movie was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
