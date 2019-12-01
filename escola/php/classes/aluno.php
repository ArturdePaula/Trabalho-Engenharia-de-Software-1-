<?php
	require_once '../database/database.php';
	class aluno extends usuario {
		private $matricula;
		private $turma;

		public function __construct() {
			$database = new Database();
			$dbSet = $database->dbSet();
			$this->conn = $dbSet;
		}

		public setmatricula($value) {
			$this->matricula = $value;
		}

		public getMatricula() {
			return $this->matricula;
		}

		public setTurma($value) {
			$this->turma = $value;
		}

		public getTurma() {
			return $this->turma;
		}


		public function insert() {
			try {
				$stmt = $this->conn->prepare("INSERT INTO `aluno` (matricula, turma) VALUES
					(:matricula, :turma)");
				$stmt->bindParam(":matricula",$this->matricula);
				$stmt->bindParam(":turma",$this->turma);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}
		}


		public function update() {
			try {
				$stmt = $this->conn->prepare("UPDATE `aluno` (matricula, turma) SET
					(:matricula, :turma) WHERE matricula = :matricula");
				$stmt->bindParam(":matricula",$this->matricula);
				$stmt->bindParam(":turma",$this->turma);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}

		}


		public function delete() {
			try {
				$stmt = $this->conn->prepare("DELETE FROM `aluno` WHERE matricula = :matricula");

				$stmt->bindParam(":cpf",$this->matricula);
				$stmt->execute();
				return 1;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}

		public function ViewAll() {
			try {
				$stmt = $this->conn->prepare("SELECT * FROM aluno");
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}

	}
?>