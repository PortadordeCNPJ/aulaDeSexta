    <?php

    //Iniciando uma sessão para login do usuário
    session_start();

    if (empty($_POST) or (empty($_POST["nome"]) or (empty($_POST["data_nasc"])))) {
        echo "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $nome = $_POST["nome"];
    $data_nasc = $_POST["data_nasc"];

    $sql_clientes = "SELECT * FROM tb_clientes
                          WHERE nome = '{$nome}'
                          AND data_nasc = '{$data_nasc}'";

    $res = $conn->query($sql_clientes);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        $_SESSION["name"] = $nome;
        $_SESSION["data_nasc"] = $data_nasc;
        echo "<script>location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Usuários e/ou senha incorreto(s)');</script>";
        echo "<script>location.href='index.php';</script>";
    }
    ?>