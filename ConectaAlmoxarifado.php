<?php
//Pra concertar um erro na conex�o do PHP
//error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//local onde esta rodando o php
//$hostname = "localhost"; $senha = "1234"; $username = "root";$banco = "almoxarifado";
//$hostname = "mysql.hostinger.com.br";

//nome do usario que tem acesso
$username = "u938528970_crono";

//senha do usuario
$senha = "bdxt1069nois";

//banco de dados desejado
//$banco = "u938528970_amfad";



//abre uma conexao com o servidor MySql
//$conexao = mysql_connect($hostname, $username,$senha);

//seleciona um banco de dados MySql
//mysql_select_db($banco,$conexao);



 # Conexão
   $conn = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u938528970_amfad', $username, $senha);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>