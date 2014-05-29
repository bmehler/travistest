<?php
class Auto {

	public $marke;
	public $ps;
	public $color;
	
	
	function __construct($marke = 'bmw', $ps = '55', $color = 'blau') {
		$this->marke 	= $marke;
		$this->ps		= $ps;
		$this->color	= $blau;
	}
	
	function getMarke() {
		return $this->marke;
	}
	
	function getPs(){
		return $this->ps;
	}
	
	function getColor(){
		return $this->color;
	}
}
?>