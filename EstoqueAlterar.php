<html>
    <head>
        <title>Alterar Estoque</title>
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
include './ConectaAlmoxarifado.php';

//variaveis de alteraçao de dados
$cod_est_alt = $_POST["codea"]; //variavel do cod de alteraçao

$nom_est_alt = $_POST["na"];
$qt_est_alt = $_POST["qta"];
$pon_rep_alt = $_POST["pra"];
$cod_forn_alt = $_POST["coda"];

try {
$cont = 0;

function getFruit($conn) {
    $sql = "select * from u938528970_amfad.estoque";
    $conn->query($sql);
        $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
    foreach ($rowset as $row)
        {        
        echo $row['est_cod'] . "\t"; 
        echo $row['est_nome'] . "\t";   
        echo $row['est_qtd'] . "\t"; 
        echo $row['est_pto'] . "\t"; 
        echo $row['est_for'] . "\n"; 
        }
    }

if ($id != FALSE && $id != " ") {

    if ($nom_est_alt != " " && $nom_est_alt != NULL) {

        $resultadoNome = mysql_query("update estoque set est_nome = '$nom_est_alt' where est_cod = $cod_est_alt");
    }

    if ($qt_est_alt != " " && $qt_est_alt != NULL && $qt_est_alt != FALSE) {

        $resultadoQtde = mysql_query("update estoque set est_qtd = $qt_est_alt where est_cod = $cod_est_alt");
    }

    if ($pon_rep_alt != " " && $pon_rep_alt != NULL && $pon_rep_alt != FALSE) {

        $resultadoPontoRep = mysql_query("update estoque set est_pto = $pon_rep_alt where est_cod = $cod_est_alt");
    }

    if ($cod_forn_alt != " " && $cod_forn_alt != NULL && $cod_forn_alt != FALSE) {

        $resultadoCodForn = mysql_query("update estoque set est_for = $cod_forn_alt where est_cod = $cod_est_alt");
    }

    $resultado = mysql_query("select * from estoque where est_cod = $cod_est_alt");

    $id = mysql_result($resultado, 0, "est_cod");
    $nome = mysql_result($resultado, 0, "est_nome");
    $qtde = mysql_result($resultado, 0, "est_qtd");
    $pto = mysql_result($resultado, 0, "est_pto");
    $forn = mysql_result($resultado, 0, "est_for");
    
    //echo $stmt->rowCount();
    echo "<p>Registro Alterado Com Sucesso!</p>";
    echo "Cadastro $cod_est_alt alterado com sucesso!<br><br>";
    echo "<html> Codigo: $id<br> Nome: $nome <br>Quantidade no estoque: $qtde <br>Ponto de reposicao: $pto <br> Codigo fornecedor: $forn <br></html";
} else {

    echo "O codigo digitado nao existe!";
}

            } catch (PDOException $e) {
                echo 'Erro meards: ' . $e->getMessage();
            }

/*        if ($resultadoNome == true) {

  echo("Alteracao Realizada com sucesso.");
  } else {

  echo("Falha na Alteracao.");
  }
 */


?>
            <br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
