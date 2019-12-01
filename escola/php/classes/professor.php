<?php  
	require_once(../database/database.php);

	class professor extends usuario{
		private $CAT;
		private $disciplina_Lecionada;
		private $turma_Lecionada;

		public fuction __construct(){
			$database = new Database();
			$dbSet = $database->dbSet();
			$this->conn = $dbSet();
		}

		public setDisciplina_Lecionada($value){
			$this->disciplina_Lecionada = $value;
		}

		public setTurma_Lecionada($value){
			$this->turma_Lecionada = $valeu;
		}

		public setCAT($value){
			$this->CAT = $value;
		}

		public function insert() {
			try {
				$stmt = $this->conn->prepare("INSERT INTO `professor` (cat,disciplina_Lecionada, turma_Lecionada) VALUES
					(:cat,:disciplina_Lecionada, :turma_Lecionada)");
				$stmt->bindParam(":CAT",$this->CAT);
				$stmt->bindParam(":disciplina_Lecionada",$this->disciplina_Lecionada);
				$stmt->bindParam(":turma_Lecionada",$this->turma_Lecionada);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}
		}


		public function update() {
			try {
				$stmt = $this->conn->prepare("UPDATE `professor` (disciplina_Lecionada, turma_Lecionada) SET
					(:disciplina_Lecionada, :turma_Lecionada) WHERE CAT = :CAT");
				$stmt->bindParam(":disciplina_Lecionada",$this->disciplina_Lecionada);
				$stmt->bindParam(":turma_Lecionada",$this->turma_Lecionada);

				$stmt->execute();
				return 1;

			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}

		}


		public function delete() {
			try {
				$stmt = $this->conn->prepare("DELETE FROM `professor` WHERE CAT = :CAT");
				$stmt->bindParam(":CAT",$this->CAT);
				$stmt->bindParam(":disciplina_Lecionada",$this->disciplina_Lecionada);
				$stmt->bindParam(":turma_Lecionada",$this->turma_Lecionada);
				
				$stmt->execute();
				return 1;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}

		public function ViewAll() {
			try {
				$stmt = $this->conn->prepare("SELECT * FROM professor");
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}


?>
