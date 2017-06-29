<?php

class User {

	private $_id = 'lala';
	private $_email = 'lala@1234';
	private $_createdAt = '23-07-2002';


	public function id() {
		return $this->_id;
	}


	public function email() {
		return $this->_email;
	}


	public function createdAt() {
		return $this->_createdAt;
	}

}

?>