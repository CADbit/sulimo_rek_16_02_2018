<?php

	class Pracownik extends Osoba{
		public $badania_lekarskie;
		public $pensja;

		function __construct($tab){
			parent::__construct($tab);
			$this->badania_lekarskie = $tab['badania_lekarskie'];
			$this->pensja = $tab['pensja'];
		}

		public function getPensja(){
			return $this->pensja;
		}

		public function getDochody(){

		}
	}

?>