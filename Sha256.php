<?php 

require_once "HashAlgorithm.php";

class Sha256 extends HashAlgorithm {
	private $salt_string = null;
	
	public function hashData($str) {
		$str .= $this->salt_string;
		
		return hash("sha256", $str);
	}
	
	public function setSalt($str) {
		$this->salt_string = $str;
	}
	
	public function getSalt() {
		return $this->salt_string;
	}
}