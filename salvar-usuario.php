<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $id_cidade = $_POST["cidade"];
        $id_curso = $_POST["curso"];
        $id_periodo = $_POST["periodo"];
        $observacao = $_POST["descricao"];

        $sql_clientes = "INSERT INTO tb_clientes (nome, data_nasc, email, telefone, id_cidade, id_curso, id_periodo, observacao) VALUES ('{$nome}', '{$data_nasc}', '{$email}', '{$telefone}', '{$id_cidade}', '{$id_curso}', '{$id_periodo}', '{$observacao}')";

        $res = $conn->query($sql_clientes);

        if ($res > 0) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':

        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $id_cidade = $_POST["cidade"];
        $id_curso = $_POST["curso"];
        $id_periodo = $_POST["periodo"];
        $observacao = $_POST["descricao"];

        $sql_clientes = "UPDATE tb_clientes 
                         SET nome='{$nome}', 
                             data_nasc='{$data_nasc}', 
                             email='{$email}',
                             telefone='{$telefone}', 
                             id_cidade='{$id_cidade}', 
                             id_curso='{$id_curso}', 
                             id_periodo='{$id_periodo}', 
                             descricao='{$observacao}'
        
        WHERE
            id=" . $_REQUEST["id"];

        $res = $conn->query($sql_clientes);

        if ($res == true) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    default:
        # código...
        break;
}
