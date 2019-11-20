<?php

require_once "HashAlgorithm.php";
require_once "HasherInterface.php";

class SecureHasher implements HasherInterface{
	protected $hasher = null;
	
	public function __construct(HashAlgorithm $alg, $salt = null) {
		$this->hasher = $alg;
		$this->setSalt($salt);
	}
	
	public function hashIt($data) {
		return strtoupper(base64_encode(strrev($this->hasher->hashData($data))));
	}
	
	public function setSalt($str) {
		$this->hasher->setSalt($str);
	}
}