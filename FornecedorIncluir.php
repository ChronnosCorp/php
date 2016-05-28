<html>
    <head>
        <title>Incluir Fornecedor</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoFornecedor.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";

//variaveis de inclusao de dados
$nom_forn = $_POST["nf"];
$end_forn = $_POST["ef"];
$tel_forn = $_POST["tf"];
$con_forn = $_POST["cf"];

$resultado = mysql_query("insert into fornecedor(for_nome,for_end,for_fone,for_contato) "
        . "VALUES('$nom_forn','$end_forn','$tel_forn','$con_forn')");

if ($resultado == true) {

    echo("Inclusao Realizada com sucesso.");
} else {

    echo("Falha na Inclusao.");
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