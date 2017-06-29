<?php

class Vegetable extends Product {

	private $_productorName = 'lolo';
	private $_expiresAt = '12-03-2017';

	public function isFresh() {

		if ($_id < $_expiresAt) {
			return true;
		} else {
			return false;
		}
	}
}

?>