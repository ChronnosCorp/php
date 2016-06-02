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
            include "ConectaAlmoxarifado.php";
            try {

                $sql = "SELECT * FROM u938528970_amfad.fornecedor, u938528970_amfad.ESTOQUE WHERE for_cod = est_for";
                $stmt = $conn->query($sql);
                $stmt->execute();
                $rowset = $stmt->fetchAll(PDO::FETCH_NUM);
                foreach ($rowset as $row) {
                    $cod_for = $row[1];
                    $cod = $row[5];
                    $nome = $row[6];
                    $qtd = $row[7];
                    $pto = $row[8];
                    $nome_for = $row[1];

                    echo"Registro $cod <br>";
                    echo"-------------------------------------------------------------<br>";
                    echo "Codigo do estoque: $cod <br>";
                    echo "Nome do item de estoque: $nome <br>";
                    echo "Quantidade do estoque: $qtd <br>";
                    echo "Ponto de reposicao: $pto <br>";
                    echo "Nome do fornecedor: $nome_for <br>";
                    echo"-------------------------------------------------------------<br>";
                    echo"<br>";
                }
            } catch (PDOException $ex) {
                echo "Erro: $ex";
            }
            ?>
            <br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>
