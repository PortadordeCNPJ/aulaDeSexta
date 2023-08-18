<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $telef = $_POST["telefone"];
        $id_cidade = $_POST["cidade"];
        $id_curso = $_POST["curso"];
        $id_periodo = $_POST["periodo"];
        $id_observacao = $_POST["descricao"];

        $sql_clientes = "INSERT INTO tb_clientes (nome, data_nasc, email, telefone) VALUES ('{$nome}', '{$data_nasc}', '{$email}', '{$telef}')";
        $sql_cidades = "INSERT INTO tb_cidades (nome) VALUES ('{$id_cidade}')";
        $sql_curso = "INSERT INTO tb_cursos (nome) VALUES ('{$id_curso}')";
        $sql_periodos = "INSERT INTO tb_periodos (nome) VALUES ('{$id_periodo}')";
        $sql_observ = "INSERT INTO tb_observacao (nome) VALUES ('{$id_observacao}')";

        $res_clientes = $conn->query($sql_clientes);
        $res_cidades = $conn->query($sql_cidades);
        $res_curso = $conn->query($sql_curso);
        $res_periodo = $conn->query($sql_periodos);
        $res_observ = $conn->query($sql_observ);

        if (
            $res_clientes === TRUE &&
            $res_cidades === TRUE &&
            $res_curso === TRUE &&
            $res_periodo === TRUE &&
            $res_observ === TRUE
        ) {
            echo "<script>alert('Cadastro realizado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            // Exibe uma mensagem de erro e redireciona
            echo "<script>alert('Não foi possível cadastrar o usuário');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'label':
        # código...
        break;

    default:
        # código...
        break;
}
?>
