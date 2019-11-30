<?php
	require_once '../database/database.php';
	class usuario {
		private $matricula_aluno;
		private $notaP1;
		private $notaP2
		private $notaTrabalho;
		private $Faltas;

		public function __construct() {
			$database = new Database();
			$dbSet = $database->dbSet();
			$this->conn = $dbSet;
		}

		public setMatricula_Aluno($value) {
			$this->matricula_aluno = $value;
		}

		public getMatricula_Aluno() {
			return $this->matricula_aluno;
		}

		public setNotaP1($value) {
			$this->notaP1 = $value;
		}

		public getNotaP1() {
			return $this->notaP1;
		}

		public setNotaP2($value) {
			$this->notaP2 = $value;
		} 

		public getNotaP2() {
			return $this->notaP2;
		}

		public setNotaTrabalho($value) {
			$this->notaTrabalho = $value;
		}

		public getNotaTrabalho(){
			return $this->notaTrabalho;
		}

		public setFaltas($value) {
			$this->Faltas = $value;
		}

		public getFaltas() {
			return $this->Faltas;
		}

	}
?>