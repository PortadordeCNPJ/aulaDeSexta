<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':

        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $observacao = $_POST["descricao"];
        $id_cidade = $_POST["cidade"];
        $id_curso = $_POST["curso"];
        $id_periodo = $_POST["periodo"];

        $sql_clientes = "INSERT INTO tb_clientes (nome, data_nasc, email, telefone, observacao, id_cidade, id_curso, id_periodo) VALUES ('{$nome}', '{$data_nasc}', '{$email}', '{$telefone}', '{$observacao}', '{$id_cidade}', '{$id_curso}', '{$id_periodo}')";

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
        $observacao = $_POST["descricao"];
        $id_cidade = $_POST["cidade"];
        $id_curso = $_POST["curso"];
        $id_periodo = $_POST["periodo"];

        $sql_clientes = "UPDATE tb_clientes 
                         SET nome='{$nome}', 
                             data_nasc='{$data_nasc}', 
                             email='{$email}',
                             telefone='{$telefone}', 
                             observacao='{$observacao}',
                             id_cidade='{$id_cidade}', 
                             id_curso='{$id_curso}', 
                             id_periodo='{$id_periodo}'
        
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

    case 'excluir':

        //Pega o ID do usuario cadastrado no banco e o Excuir
        $sql_clientes = "DELETE FROM tb_clientes WHERE id=" . $_REQUEST["id"];

        //Variavel de resultado, passando pela conecção do arquivo config.php, após isso é feita a execução da query, que é o ($sql)
        $res = $conn->query($sql_clientes);

        //IF para testar se a variavel de resultado for TRUE, ela retorna uma mensagem em JavaScript de que foi cadastrado e redireciona para a página de listar usuarios. Onde ficara a lista de todos os usuarios cadastrados.
        if ($res == true) {
            echo "<script>alert('Excuido com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {

            //ELSE que retorna um erro em que não foi possivel cadastrar um usuario e redireciona para a pagina de listar usuario
            echo "<script>alert('Não foi possivel cadastrar o usuario');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

    default:
        # código...
        break;
}
