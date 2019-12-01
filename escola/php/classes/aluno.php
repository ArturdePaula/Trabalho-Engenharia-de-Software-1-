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

		public function notaUptade (){
		      $stmt = $this->conn->prepare("UPDATE `aluno` (nota) SET (nota) as A , Assiste as S WHERE A.matricula = S.matricula ORDER BY matricula" );
		      $stmt->bindParam(":nota, $this->nota");

		      $stmt->execute();
		      return 1;
	    }

	    public function matriculaAluno(){
	    	
	    	try{
	    		
	    		if($turma != 1 || $turma != 2){
	    			return 0;
	    		}

	    		$stmt = $this->conn->prepare("UPDATE `aluno` (turma) SET (:turma) WHERE turma = :turma");
	    		$stmt->bindParam(":turma, $this->turma");
				    		
	    		

	    		for($i=1;$i<6;i++){
	    			
	    			$codigo_disciplina = $i;

	    			$stmt1 = $this->conn->prepare("UPDATE `assiste` (matricula_aluno,codigo_disciplina) SET (:matricula_aluno, :codigo_disciplina) WHERE matricula_aluno = :matricula_aluno, codigo_disciplina = :codigo_disciplina");
		    		$stmt1->blindParam(":codigo_disciplina, $this->codigo_disciplina");

	    		}

	    		$stmt->execute();
	    		return 1;
	    	}catch(PDOException $e){
	    		echo $e->message();
	    		return 0;
	    	}
	    }



	}
?>