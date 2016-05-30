<html>
    <head>
        <title>Consultar Estoque Especifico</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoEstoque.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico"/>
        <link rel="icon" type="image/gif" href="../ico/favicon.ico"/>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";

//variaveis de consulta especifica
$cod_est_con = $_POST["codec"]; //variavel do cod de consulta especifica

$resultadoCod = mysql_query("select * from estoque where est_cod = $cod_est_con");
@$id = mysql_result($resultadoCod, 0, 0);

if ($id != FALSE && $id != " ") {

$cod1 = mysql_result($resultadoCod, 0, 0);
$nome1 = mysql_result($resultadoCod, 0, "est_nome");
$qtd1 = mysql_result($resultadoCod, 0, "est_qtd");
$pto1 = mysql_result($resultadoCod, 0, "est_pto");
$cod_for =  mysql_result($resultadoCod, 0, "est_for");

$resultado2 = mysql_query("SELECT * FROM fornecedor WHERE for_cod = $cod_for");

$nome_for =  mysql_result($resultado2, 0, "for_nome");

echo"Registro 1<br>";
echo"-------------------------------------------------------------<br>";
echo "Codigo do estoque: $cod1 <br>";
echo "Nome do item de estoque: $nome1 <br>";
echo "Quantidade do estoque: $qtd1 <br>";
echo "Ponto de reposicao: $pto1 <br>";
echo "Nome do fornecedor: $nome_for <br>";
echo"-------------------------------------------------------------<br>";
echo"<br>";

} else {

    echo "O codigo digitado nao existe!";
}

mysql_close($conexao);
?>
            <br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
