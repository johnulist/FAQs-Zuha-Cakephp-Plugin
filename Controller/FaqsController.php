<?php
class FaqsController extends AppController {

	var $name = 'Faqs';

	/*function index() {
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid faq', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faq', $this->Faq->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Faq->create();
			if ($this->Faq->save($this->data)) {
				$this->Session->setFlash(__('The faq has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.', true));
			}
		}
		$creators = $this->Faq->Creator->find('list');
		$modifiers = $this->Faq->Modifier->find('list');
		$this->set(compact('creators', 'modifiers'));
	}*/

	/*
	 * Function used to get list of faq 
	 * @param = name  
	 */
	function faq_list($type = null) {
		if (!empty($type)) {
			$typeId = enum('FAQ_TYPE', $type);
			if (!empty($typeId)) {
				$options['conditions']['Faq.faq_type_id'] = $typeId;
			}
		}
		$options['order'] = array('Faq.order ASC');
		$options['conditions']['Faq.is_public'] = 1;
		$faqList = $this->Faq->find('all', $options);
		return $faqList;
	}
	/*function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid faq', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faq->save($this->data)) {
				$this->Session->setFlash(__('The faq has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faq->read(null, $id);
		}
		$creators = $this->Faq->Creator->find('list');
		$modifiers = $this->Faq->Modifier->find('list');
		$this->set(compact('creators', 'modifiers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for faq', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faq->delete($id)) {
			$this->Session->setFlash(__('Faq deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Faq was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}*/
	function admin_index() {
		$this->Faq->recursive = 0;
		$this->set('faqs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid faq', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faq', $this->Faq->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Faq->create();
			if ($this->Faq->save($this->data)) {
				$this->Session->setFlash(__('The faq has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.', true));
			}
		}
		$faqTypes = enum('FAQ_TYPE');
		$this->set(compact('faqTypes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid faq', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faq->save($this->data)) {
				$this->Session->setFlash(__('The faq has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faq->read(null, $id);
		}
		$faqTypes = $this->Faq->FaqType->find('list');
		$this->set(compact('faqTypes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for faq', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faq->delete($id)) {
			$this->Session->setFlash(__('Faq deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Faq was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>