<html>
    <head>
        <title>Consultar Fornecedor Especifico</title>
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

//variaveis de consulta especifica
$cod_forn_con = $_POST["codfc"]; //variavel do cod de consulta especifica

$resultadoCod = mysql_query("select * from fornecedor where for_cod = $cod_forn_con");
@$id = mysql_result($resultadoCod, 0, 0);

if ($id != FALSE && $id != " ") {


$cod1 = mysql_result($resultadoCod, 0, 0);
$nome = mysql_result($resultadoCod, 0, "for_nome");
$end = mysql_result($resultadoCod, 0, "for_end");
$fone = mysql_result($resultadoCod, 0, "for_fone");
$con = mysql_result($resultadoCod, 0, "for_contato");

echo"Registro 1<br>";
echo"-------------------------------------------------------------<br>";
echo "Codigo do fornecedor: $cod1 <br>";
echo "Nome do fornecedor: $nome <br>";
echo "Endereco do fornecedor: $end <br>";
echo "Telefone do fornecedor: $fone <br>";
echo "Contato do fornecedor: $con <br>";
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
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarFornecedor()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
