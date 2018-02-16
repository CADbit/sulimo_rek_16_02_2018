<?php

abstract class Osoba{

	public $tab;
	public $imie;
	public $nazwisko;
	public $data_urodzenia;
	public $wiek;

	function __construct($tab){
		$this->imie = $tab['imie'];
		$this->nazwisko = $tab['nazwisko'];
		$this->data_urodzenia = $tab['data_urodzenia'];
		$this->wiek = $this->setWiek();
	}

	abstract function getDochody();

	public function setWiek(){
		return date('Y')-date('Y',strtotime($this->data_urodzenia));
	}
}

?>