<html>
    <head>
        <title>Alterar Fornecedor</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoFornecedor.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="interface">
<?php

//Conexao Banco de Dados
include "ConectaAlmoxarifado.inc";

//variaveis de alteraçao de dados
$cod_forn_alt = $_POST["codfa"]; //variavel do cod de alteraçao

$nom_forn_alt = $_POST["nfa"];
$end_forn_alt = $_POST["efa"];
$tel_forn_alt = $_POST["tfa"];
$cont_forn_alt = $_POST["cfa"];
        
$buscar = mysql_query("SELECT for_cod FROM fornecedor");


$cont = 0;

$resultadoCod = mysql_query("select * from fornecedor where for_cod = $cod_forn_alt");
@$id = mysql_result($resultadoCod, 0, 0);

if ($id != FALSE && $id != " ") {

    if ($nom_forn_alt != " " && $nom_forn_alt != NULL) {

        $resultadoNome = mysql_query("update fornecedor set for_nome = '$nom_forn_alt' where for_cod = $cod_forn_alt");
    }

    if ($end_forn_alt != " " && $end_forn_alt != NULL && $end_forn_alt != FALSE) {

        $resultadoFornEnd = mysql_query("update fornecedor set for_end = '$end_forn_alt' where for_cod = $cod_forn_alt");
    }

    if ($tel_forn_alt != " " && $tel_forn_alt != NULL && $tel_forn_alt != FALSE) {

        $resultadoFornTel = mysql_query("update fornecedor set for_fone = '$tel_forn_alt' where for_cod = $cod_forn_alt");
    }

    if ($cont_forn_alt != " " && $cont_forn_alt != NULL && $cont_forn_alt != FALSE) {

        $resultadoFornCont = mysql_query("update fornecedor set for_contato = '$cont_forn_alt' where for_cod = $cod_forn_alt");
    }

    $resultado = mysql_query("select * from fornecedor where for_cod = $cod_forn_alt");

    $id = mysql_result($resultado, 0, "for_cod");
    $nome = mysql_result($resultado, 0, "for_nome");
    $end = mysql_result($resultado, 0, "for_end");
    $tel = mysql_result($resultado, 0, "for_fone");
    $con = mysql_result($resultado, 0, "for_contato");


    echo "Cadastro $cod_forn_alt alterado com sucesso!<br><br>";
    echo "<html> Codigo: $id<br> Nome: $nome <br>Endereco: $end <br>Telefone: $tel <br> Contato: $con <br></html";
} else {

    echo "O codigo digitado nao existe!";
}


/*        if ($resultadoNome == true) {

  echo("Alteracao Realizada com sucesso.");
  } else {

  echo("Falha na Alteracao.");
  }
 * 
 */


mysql_close($conexao);
?>
            <br><br>
            <div class = "DivVoltares">
                <input id="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input id="butaoVoltarPHP" type="submit" onclick="VoltarFornecedor()" Value="Voltar">
            </div>
        </div>
    </body>
</html>