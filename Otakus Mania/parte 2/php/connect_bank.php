<?php

$domain="localhost";  //localização
$user="root";		 //usuario
$password="";		 //senha
$database="agenda";	 //banco de dados


//instanciando a classe MYSQLi
$mysqli = new mysqli($domain,$user,$password,$database);
$mysqli->set_charset("utf8"); //caracter do banco mysqli

if ($mysqli->connect_erro) {
	echo "Não foi possivel conectar com o banco de dados do mysli";
	echo $mysqli->connect_erro;
}//mostra mensagem em caso de erros no banco

?>