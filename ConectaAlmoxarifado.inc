<?php

<?php
//Pra concertar um erro na conex�o do PHP
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//local onde esta rodando o php
$hostname = "mysql.hostinger.com.br";

//nome do usario que tem acesso
$username = "u938528970_crono";

//senha do usuario - em branco
$senha = "xt1069@nois";

//banco de dados desejado
$banco = "u938528970_AMFAD";

//abre uma conexao com o servidor MySql
$conexao = mysql_connect($hostname, $username,$senha);

//seleciona um banco de dados MySql
mysql_select_db($banco,$conexao);
?>
