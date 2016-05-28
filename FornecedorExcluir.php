<html>
    <head>
        <title>Excluir Fornecedor</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoFornecedor.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";

//variaveis de exclusao de dados
$cod_forn_exc = $_POST["codfe"]; //variavel do cod de exclusao

$resultadoCod = mysql_query("select * from fornecedor where for_cod = $cod_forn_exc");
@$id = mysql_result($resultadoCod, 0, 0);

if ($id != FALSE && $id != " ") {


if ($resultadoCod == true) {

    echo("Exclusao Realizada com sucesso.");
} else {

    echo("Falha na Exclusao.");
}

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