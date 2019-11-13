<?php 

class ClassCrud extends Conexao{
	

	#atributos
	private $Crud;
	private $Contador;


	#Preararção
	private function preparedStatements($Query, $Parametros){

		$this->countParametros($Parametros);
		$this->Crud=$this->conectaDB()->prepare($Query);
		

		if($this->Contador > 0){

            for($i=1; $i <= $this->Contador; $i++){
                 $this->Crud->bindValue($i,$Parametros[$i-1]);
                  }
	      }
	      
		$this->Crud->execute();
        
	}


    #Contando parametros
	private function countParametros($Parametros){
		$this->Contador=count($Parametros);
	}

}

?>