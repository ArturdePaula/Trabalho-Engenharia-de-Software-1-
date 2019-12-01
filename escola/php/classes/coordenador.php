<?php 

include_once(../database/database.php);


class coordenador{



	public function uptadeProfessor($professor) {
			try{
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


	public function updateAluno($aluno) {
			try{
				$stmt = $this->conn->prepare("UPDATE `aluno` (matricula, turma) SET
					(:matricula, :turma) WHERE matricula = :matricula");
				$stmt->bindParam(":matricula",$this->matricula);
				$stmt->bindParam(":turma",$this->turma);

				$stmt->execute();
				return 1;

			}catch (PDOException $e) {
				echo $e->getMessage();
				return 0;

			}

		}


}	


 ?>