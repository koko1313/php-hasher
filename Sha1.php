<?php

require_once "HashAlgorithm.php";

class Sha1 extends HashAlgorithm {
	private $salt_string = null;
	
	public function hashData($str) {
		$str .= $this->salt_string;
		
		return hash("sha1", $str);
	}
	
	public function setSalt($str) {
		$this->salt_string = $str;
	}
	
	public function getSalt() {
		return $this->salt_string;
	}
}