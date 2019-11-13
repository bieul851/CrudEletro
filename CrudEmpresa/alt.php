<?php  include("../Includes/Header.php"); ?>


<div>
	<div class="Formulario">
               <h1 style="text-align: center;">Alterar Empresa</h1>
                <br> <br>
               
               <form name="FormCadastro" id="FormCadastro" method="post" action="../Controller/ControllerCadastro.php">

               <div class="FormularioInput" >
               	   Nome: <br>
               	   <input type="text" name="Nome" id="Nome">
               	    <br> <br>
               </div>

               <div class="FormularioInput">
               	   Sexo (M ou F): <br>
               	   <input type="text" name="Sexo" id="Sexo">
               	    <br> <br>
               </div>

                <div class="FormularioInput">
               	   E-Mail: <br>
               	   <input type="text" name="Email" id="Email">
               </div>

                <div class="FormularioInput FormularioInput100" style="text-align: center;">
                	 <br> <br>
               	   <input type="submit" value="Alterar"><br>
               	   <a href="../Empresa.php" style="font-size: 15px; text-align: center;">Voltar para pagina anterior...</a>
               	 
                </form>
               </div>
</div>



<?php  include("../Includes/Footer.php"); ?>
