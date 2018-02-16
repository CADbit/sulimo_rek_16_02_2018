<?php

	class Emeryt extends Osoba{

		public $emerytura;

		function __construct($tab){
			parent::__construct($tab);
			$this->emerytura = $tab['emerytura'];

		}

		public function getEmerytura(){
			return $this->emerytura;
		}

		public function getDochody(){
			
		}


	}

?>