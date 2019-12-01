<?php 

include_once(../database/database.php);

class disciplina{
	public $nome;
	public $codigo;

	public fuction __COnstruct(){
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet();
	}

	public setNome($value){
		$this->nome = $value;
	}

	public setCodigo($value){
		$this->codigo = $value;
	}

	
	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `disciplina` (nome, codigo) VALUES (:nome, :codigo)");
			$stmt->bindParam(":nome",$this->nome);
			$stmt->bindParam(":codigo",$this->codigo);

			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function uptade(){
			try{
			$stmt = $this->conn->prepare("UPDATE `disciplina` (nome, codigo) SET (:nome, :codigo) where codigo = :codigo ");
			$stmt->bindParam(":nome, $this->nome");
			$stmt->bindParam(":codigo, $this->codigo");

			$stmt->execute();
			return 1;
			}catch(PDOException $e){
				echo $e->getMessage();
				return 0;
			}
	}

	public function delete() {
			try {
				$stmt = $this->conn->prepare("DELETE FROM `disciplina` WHERE codigo = :codigo");
				$stmt->bindParam(":codigo",$this->codigo);
				$stmt->bindParam(":nome",$this->nome);
				$stmt->bindParam(":codigo",$this->codigo);
				
				$stmt->execute();
				return 1;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}

		public function ViewAll() {
			try {
				$stmt = $this->conn->prepare("SELECT * FROM disciplina");
				$stmt->execute();
				return $stmt;
			} catch (PDOException $e) {
				echo $e->getMessage();
				return 0;
			}
		}





}

?>