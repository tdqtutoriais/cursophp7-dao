<?php

	class Usuario{
		
		private $id;
		private $login;
		private $senha;
		private $cadastro;


		public function setId($Id){$this->id = $Id;}
		public function getId(){return $this->id;}
		public function setLogin($Login){$this->Login = $Login}
		public function getLogin(){return $this->Login;}
		public function setSenha($Senha){$this->Senha = $Senha;}
		public function getSenha(){return $this->Senha;}
		public function setCadastro($Cadastro){$this->Cadastro = $Cadastro;}
		public function getCadastro(){return $this->Cadastro;}

		public function LoadById(){
			
		}
	}