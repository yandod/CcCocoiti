<?php
	class HomeController extends CcCocoitiAppController {
	public $uses = array('Issue');
	public function index() {
		$this->set('count',$this->Issue->find('count'));
	}
}

