<html>
    <head>
        <title>Consultar Todos os Fornecedores</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoFornecedor.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico"/>
        <link rel="icon" type="image/gif" href="../ico/favicon.ico"/>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";


$resultado = mysql_query("SELECT * FROM fornecedor");
$linhas = mysql_num_rows($resultado);
$f=0;

for ($i = 0; $i < $linhas; $i++) {

    $cod = mysql_result($resultado, $i, "for_cod");
    $nome = mysql_result($resultado, $i, "for_nome");
    $end = mysql_result($resultado, $i, "for_end");
    $fone = mysql_result($resultado, $i, "for_fone");
    $con = mysql_result($resultado, $i, "for_contato");

    $f++;
    
    echo"Registro $f<br>";
    echo"-------------------------------------------------------------<br>";
    echo "Codigo do fornecedor: $cod <br>";
    echo "Nome do fornecedor: $nome <br>";
    echo "Endereco do fornecedor: $end <br>";
    echo "Telefone do fornecedor: $fone <br>";
    echo "Contato do fornecedor: $con <br>";
    echo"-------------------------------------------------------------<br>";
    echo"<br>";
}

mysql_close($conexao);
?>
            <br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarFornecedor()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
