<?php

if (isset($_POST['Id'])) {
	$Id=filter_input(INPUT_POST,'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
	$Id=filter_input(INPUT_GET,'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Id=0;
}


#NOME
if (isset($_POST['Nome'])) {
	$Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
	$Nome=filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Nome="";
}


#SEXO
if (isset($_POST['Sexo'])) {
	$Sexo=filter_input(INPUT_POST,'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Sexo'])){
	$Sexo=filter_input(INPUT_GET,'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Sexo="";
}

#E-Mail
if (isset($_POST['Email'])) {
	$Email=filter_input(INPUT_POST,'Email', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Email'])){
	$Email=filter_input(INPUT_GET,'Email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$Email="";
}


?>