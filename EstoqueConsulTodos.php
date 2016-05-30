<html>
    <head>
        <title>Consultar Todos No Estoque</title>
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


$resultado = mysql_query("SELECT * FROM estoque");
$resultado2 = mysql_query("SELECT * FROM fornecedor, estoque WHERE for_cod = est_for");
$linhas = mysql_num_rows($resultado);
$f=0;

for ($i = 0; $i < $linhas; $i++) {
  
    $cod_for =  mysql_result($resultado, $i, "est_for");
    $cod = mysql_result($resultado, $i, "est_cod");
    $nome = mysql_result($resultado, $i, "est_nome");
    $qtd = mysql_result($resultado, $i, "est_qtd");
    $pto = mysql_result($resultado, $i, "est_pto");
    $nome_for =  mysql_result($resultado2, $i, "for_nome");   
   
    $f++;
    
    echo"Registro $f<br>";
    echo"-------------------------------------------------------------<br>";
    echo "Codigo do estoque: $cod <br>";
    echo "Nome do item de estoque: $nome <br>";
    echo "Quantidade do estoque: $qtd <br>";
    echo "Ponto de reposicao: $pto <br>";
    echo "Nome do fornecedor: $nome_for <br>";
    echo"-------------------------------------------------------------<br>"; 
    echo"<br>";
    
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
