<?php
class Upload {
	protected $_name;
	protected $_tmp;
	protected $_size;
	protected $_type;
	protected $_path = "data/";

	public function __construct($data) {
		$this->setName($data['name']);
		$this->setTmp($data['tmp_name']);
		$this->setSize($data['size']);
		$this->setType($data['type']);
	}

	public function setName($name) {
		$this->_name = $name;
	}

	public function getName() {
		return $this->_name;
	}

	public function setTmp ($tmp) {
		$this->_tmp = $tmp;
	}

	public function getTmp () {
		return $this->_tmp;
	}

	public function setSize ($size) {
		$this->_size = $size;
	}

	public function getSize () {
		return $this->_size;
	}

	public function setType ($type) {
		$this->_type = $type;
	}

	public function getType () {
		return $this->_type;
	}

	public function getPath () {
		return $this->_path;
	}

	public function uploadImg () {
		if ($this->getName() != "") {
			move_uploaded_file($this->getTmp(), $this->getPath().$this->getName());
			return true;
		} else {
			return false;
		}
	}
}