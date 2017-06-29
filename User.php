<?php

class User {

	private $_id;
	private $_email;
	private $_createdAt;


// accesseurs (getters/setters)
// je récupére les valeurs des attributs avec get

	public function getId() {
		return $this->_id;
	}


	public function getEmail() {
		return $this->_email;
	}


	public function getCreatedAt() {
		return $this->_createdAt;
	}

// je me sert de set pour modifier et renvoyer les modifs dans les attributs

	public function setId($i) {
		                //paramétre entrant
		$this->_id = $i;
	//paramétre sortant	
	}

	public function setEmail($j) {
		$this->_email = $j;
	}

	public function setCreatedAt($k) {
		$this->_createdAt = $k;
	}

}

?>