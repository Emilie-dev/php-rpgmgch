<?php

class Product {

	private $_id = 'veg';
	private $_name = 'tomate';
	private $_price = 1.02;


	public function id() {
		return $this->_id;
	}

	public function name() {
		return $this->_name;
	}

	public function price() {
		return $this->_price;
	}


}




?>