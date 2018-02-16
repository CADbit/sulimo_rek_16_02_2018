<?php

	class PracujacyStudent extends Student implements IStudent{

		private $pracownik;

		function __construct($tab){
			parent::__construct($tab);
			$this->pracownik = new Pracownik($tab);
		}

		public function __call($method, $tab){
			$this->pracownik->$method($tab);
		}

		public function getStypendium(){
			return $this->stypendium;
		}

		public function getDochody(){
			$wszystkie = $this->getStypendium() + $this->pracownik->getDochody();
			return $wszystkie;
		}

		public function getNumerIndeksu(){
			return $this->nr_indeksu;
		}

		public function getDane(){
			return $this->imie." ".$this->nazwisko.", lat: ".$this->setWiek().", student nr: ". $this->getNumerIndeksu().".";
		}


	}

?>