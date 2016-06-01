<html>
    <head>
        <title>Incluir no Estoque</title>
        <meta charset="UTF-8"/>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="../js/verificacaoEstoque.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="../ico/favicon.ico">
        <link rel="icon" type="image/gif" href="../ico/favicon.ico">
    </head>
    <body>
        <div class="interface">
            <?php
//variaveis de inclusao de dados
            $nom_est = $_POST["n"];
            $qt_est = $_POST["qt"];
            $pon_rep = $_POST["pr"];
            $cod_forn = $_POST["cod"];
            /*
              //Criando um objeto Pojo de Estoque
              PojoEstoque::$Pojo = new PojoEstoque();

              //Atribuir valores Post em variaveis da classe usuario
              $Pojo->setNom_est($nom_est);
              $Pojo->setQt_est($qt_est);
              $Pojo->setPon_rep($pon_rep);
              $Pojo->setCod_forn($cod_forn);
             */



            # Conexão
            $conn = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u938528970_amfad', 'u938528970_crono', 'bdxt1069nois');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `ESTOQUE`(`est_nome`, `est_qtd`, `est_pto`, `est_for`) VALUES (?,?,?,?)";
            try {
                $stmt = $conn->prepare($sql);
                $stmt->bindValue (1, $nom_est, PDO::PARAM_STR);
                $stmt->bindValue (2, $qt_est, PDO::PARAM_INT);
                $stmt->bindValue (3, $pon_rep);
                $stmt->bindValue (4, $cod_forn, PDO::PARAM_INT);
                $stmt->execute();
                echo $stmt->rowCount();
            } catch (PDOException $e) {
                echo 'Erro meards: ' . $e->getMessage();
            }
            echo "<p>Registro Inserido Com Sucesso!";
            ?>
            <br><br>
            <div class = "DivVoltares">
                <input class="butaoVoltarPHP" type="button" onclick="VoltarPrincipal()" Value="Menu Principal">
                <input class="butaoVoltarPHP" type="submit" onclick="VoltarEstoque()" Value="Voltar">
            </div>
        </div>
    </body>
</html>

