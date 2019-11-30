<?php
	require_once '../database/database.php';
	class usuario {
		private $cpf;
		private $nome;
		private $rg;
		private $endereco;
		private $senha;

		public function __construct() {
			$database = new Database();
			$dbSet = $database->dbSet();
			$this->conn = $dbSet;
		}

		public setCpf($value) {
			$this->cpf = $value;
		}

		public getCpf() {
			return $this->cpf;
		}

		public setNome($value) {
			$this->nome = $value;
		}

		public getNome() {
			return $this->nome;
		}

		public setRg($value) {
			$this->rg = $value;
		} 

		public getRg() {
			return $this->rg;
		}

		public setEndereco($value) {
			$this->endereco = $value;
		}

		public getEndereco(){
			return $this->endereco;
		}

		public setSenha($value) {
			$this->senha = $value;
		}

		public getSenha() {
			return $this->senha;
		}

		public function insert() {
			try {
				$stmt = $this->conn->prepare("INSERT INTO `usuario` (cpf, nome, rg, endereco, senha) VALUES
					(:cpf, :nome, :rg, :endereco, :senha)");
				$stmt->bindParam(":cpf",$this->cpf);
				$stmt->bindParam(":nome",$this->nome);
				$stmt->bindParam(":rg",$this->rg);
				$stmt->bindParam(":endereco",$this->endereco);
				$stmt->bindParam(":senha",$this->senha);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}
		}


		public function update() {
			try {
				$stmt = $this->conn->prepare("UPDATE `usuario` (cpf, nome, rg, endereco, senha) SET
					(:cpf, :nome, :rg, :endereco, :senha) WHERE cpf = :cpf");
				$stmt->bindParam(":cpf",$this->cpf);
				$stmt->bindParam(":nome",$this->nome);
				$stmt->bindParam(":rg",$this->rg);
				$stmt->bindParam(":endereco",$this->endereco);
				$stmt->bindParam(":senha",$this->senha);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}

		}


		public function delete() {
			try {
				$stmt = $this->conn->prepare("DELETE FROM `usuarios` WHERE cpf = :cpf");

				$stmt->bindParam("")
			}
		}

	}
?>