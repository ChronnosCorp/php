<html>
    <head>
        <title>Incluir no Estoque</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoEstoque.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";

//variaveis de inclusao de dados
$nom_est = $_POST["n"];
$qt_est = $_POST["qt"];
$pon_rep = $_POST["pr"];
$cod_forn = $_POST["cod"];

$resultado = mysql_query("insert into estoque(est_nome,est_qtd,est_pto,est_for) "
        . "VALUES('$nom_est',$qt_est,$pon_rep,$cod_forn)");

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
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
