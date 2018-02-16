<?php
class Student extends Osoba implements IStudent{
	public $nr_indeksu;
	public $stypendium;

	function __construct ($tab){
		parent::__construct($tab);
		$this->nr_indeksu = $tab['nr_indeksu'];
		$this->stypendium = $tab['stypendium'];
	}

	public function getStypendium(){return $this->stypendium;}
	public function getDochody(){return $this->getStypendium();}
	public function getNumerIndeksu(){return $this->nr_indeksu;}
}
?>