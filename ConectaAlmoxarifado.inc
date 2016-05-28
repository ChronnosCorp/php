<?php

//local onde esta rodando o php
$hostname = "localhost";

//nome do usario que tem acesso
$username = "root";

//senha do usuario - em branco
$senha = "usbw";

//banco de dados desejado
$banco = "almoxarifado";

//abre uma conexao com o servidor MySql
$conexao = mysql_connect($hostname, $username,$senha);

//seleciona um banco de dados MySql
mysql_select_db($banco,$conexao);
?>