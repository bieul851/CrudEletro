<?php 


abstract Class Conexao{

     #Essa função irá realizar a conexão com o banco de dados.
	protected function conectaDB(){
        try{
             $Con= new PDO("mysql:host=localhost;dbname=crudeletro","root","gabriel851");
             return $Con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
	}
}

?>