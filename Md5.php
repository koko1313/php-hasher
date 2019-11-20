<?php

require_once "HashAlgorithm.php";

class Md5 extends HashAlgorithm {
	private $salt_string = null;
	
	public function hashData($str) {
		$str .= $this->salt_string;
		
		return hash("md5", $str);
	}
	
	public function setSalt($str) {
		$this->salt_string = $str;
	}
	
	public function getSalt() {
		return $this->salt_string;
	}
}