<?php
require_once 'model/DataHandler.php';

class ContactsLogic {

	public function __construct() {
		$this->DataHandler = new Datahandler('localhost','mysql' ,'test' ,'root' ,'');
	}

	public function createContact(){
		//isset
	}

	public function readsContacts(){
		$sql = 'SELECT * FROM contacts';
		$results = $this->DataHandler->readsData($sql); 
		return $results;
	}

	public function readContact($id){
		
	}

	public function updateContact($name, $phone, $email, $address, $id){
		//isset
	}

	public function deleteContact($id){

	}



}
