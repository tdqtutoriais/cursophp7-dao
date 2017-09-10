<?php



	class Sql extends PDO{


		private $Conn;

		public function __construct(){
			$this->Conn = new PDO("mysql:host=localhost;dbname=dbphp7;", "root", "");
		}

		private function setParams($Statement, $Parametros = array()){
			foreach ($Parametros as $Chave => $Valor) {
				$this->setParam();
			}
		}

		private function setParam($Statement, $Chave, $Valor){
			$Statement->bindParams($Chave, $Valor);
		}

		public function Query($Comando, $Parametros = array()){
			$statement = $this->Conn->prepare($Comando);
			$this->setParams($statement, $Parametros);
			$statement->execute();
			return $statement;
		}

		public function Select($Comando, $Parametros = array()){
			$statement = $this->Query($Comando, $Parametros);
			return $statement->FetchAll(PDO::FETCH_ASSOC);
		}




	}