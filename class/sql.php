<?php 

	class sql extends PDO{

		private $Conn;

		public function __construct(){
			$this->Conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		}

		private function setParams($statment, $parameters = array()){
			foreach ($parameters as $key => $value) {
				$this->setParam($key, $value);
			}
		}

		private function setParam($statment, $key, $value){
			$statment->bindParam($key, $value);
		}

		public function Query($rawQuery, $params = array()){
			$stmt = $this->Conn->prepare($rawQuery);
			$this->setParams($stmt, $params);
			$stmt->execute();
			return $stmt;
		}

		public function Select($rawQuery, $params = array()){
			$stmt = $this->Query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

	}
