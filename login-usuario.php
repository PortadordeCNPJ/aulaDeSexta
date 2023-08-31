    <?php

    //Iniciando uma sessão para login do usuário
    session_start();

    if (empty($_POST) or (empty($nome) or (empty($data_nasc)))) {
        echo "<stript>location.href='index.php'</script>";
    }

    $nome = $_POST["name"];
    $data_nasc = $_POST["data_nasc"];

    $sql_clientes = "SELECT * FROM tb_clientes
                          WHERE name='{$nome}'
                          AND data_nasc='{$data_nasc}'";

    $res = $conn->query($sql_clientes) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        $_SESSION["name"] = $nome;
        $_SESSION["email"] = $row->email;
        echo "<stript>location.href='dashboard.php';</script>";
    } else {
        echo "<stript>alert('Usuários e/ou senha incorreto(s)');</script>";
        echo "<stript>location.href='index.php';</script>";
    }
    ?>