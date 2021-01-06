<?php

$produto1 		=$_POST["produto1"];
$quantidade1	=$_POST["quantidade1"];
$preco1			=$_POST["preco1"];
	
$produto2		=$_POST["produto2"];
$quantidade2	=$_POST["quantidade2"];
$preco2			=$_POST["preco2"];

$produto3 		=$_POST["produto3"];
$quantidade3	=$_POST["quantidade3"];
$preco3			=$_POST["preco3"];
	
$soma1= $preco1 + $quantidade1;

$soma2= $preco2 + $quantidade2;

$soma3= $preco3 + $quantidade3;


echo "Mostrando Produtos<br/><br/>";
echo "Produto1: $produto1<br/>";
echo "Quantidade1: $quantidade1<br/>";
echo "Preco1: $preco1<br/>";
echo "Total1: $soma1<br/><br/>";

echo "Produto2: $produto2<br/>";
echo "Quantidade2: $quantidade2<br/>";
echo "Preco2: $preco2<br/>";
echo "Total2: $soma2<br/><br/>";


echo "Produto3: $produto3<br/>";
echo "Quantidade3: $quantidade3<br/>";
echo "Preco3: $preco3<br/>";
echo "Total3: $soma3<br/><br/>";


require("connct_bank.php");

//gravando os dados no banco
$mysqli->query("INSERT INTO tesla VALUES ('$produto1','$quantidade1','$preco1')");

$mysqli->query("INSERT INTO tesla VALUES ('$produto2','$quantidade2','$preco2)");

$mysqli->query("INSERT INTO tesla VALUES ('$produto3','$quantidade3','$preco3')");

echo $mysqli->erro;

?>		