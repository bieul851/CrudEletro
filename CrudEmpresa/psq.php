<?php  include("../Includes/Header.php"); ?>


<div>
	<div class="Formulario">
               <h1 style="text-align: center;">Pesquisar Empresa</h1>
                <br> <br>
               
               <form name="FormCadastro" id="FormCadastro" method="post" action="../Controller/ControllerCadastro.php">

               <div style="text-align: center;">
               	   Nome: <br>
               	   <input type="text" name="Nome" id="Nome">
               	    <br> <br>
               </div>

                <div class="FormularioInput FormularioInput100" style="text-align: center;">
                	 <br> <br>
               	   <input type="submit" value="Pesquisar"><br>
               	   <a href="../Empresa.php" style="font-size: 15px; text-align: center;">Voltar para pagina anterior...</a>
               	 
                </form>
               </div>
</div>



<?php  include("../Includes/Footer.php"); ?>