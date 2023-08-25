<?php


$sql_clientes = "SELECT clientes.*,cidades.id AS id_cidade, 
                cursos.id AS id_curso ,
                cidades.nome AS nome_cidade, 
                cursos.nome AS nome_curso,
                periodos.nome AS nome_periodo
                FROM tb_clientes AS clientes 
                INNER JOIN tb_cidades AS cidades ON clientes.id_cidade = cidades.id 
                INNER JOIN tb_cursos AS cursos ON clientes.id_curso = cursos.id
                INNER JOIN tb_periodos AS periodos ON clientes.id_curso = cursos.id
                WHERE clientes.id=" . $_REQUEST["id"];

$res = $conn->query($sql_clientes);

$row_cliente = $res->fetch_object();
//pega o resultado da tabela de cidades
$sql_cidades = "SELECT * FROM tb_cidades";

//resultado da conecção com o sql de cidades
$res_cidades = $conn->query($sql_cidades);

//A variavel $qtd é a quantidade de resultados, então ele ira pegar do resultados o número de linhas $num_rows
$sql_cidades = $res_cidades->num_rows;


//pega os valores da tabela de cursos
$sql_curso = "SELECT * FROM tb_cursos";

//pefa o resultado da 
$res_curso = $conn->query($sql_curso);

//A variavel $qtd é a quantidade de resultados, então ele ira pegar do resultados o número de linhas $num_rows
$sql_curso = $res_curso->num_rows;


//pega o resultado da tabela de periodos
$sql_periodos = "SELECT * FROM tb_periodos";

//resultado da conecção com o sql
$res_periodos = $conn->query($sql_periodos);

//A variavel $qtd é a quantidade de resultados, então ele ira pegar do resultados o número de linhas $num_rows
$sql_periodos = $res_periodos->num_rows;
?>

<h1>
    <center>REGISTRO</center>
</h1>
<form class="form-container" method="post" action="?page=salvar">
    <div class="inf-container">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php echo $row_cliente->id; ?>">
        Nome: <input type="text" class="input-inf" name="nome" size="40" maxlength="45" placeholder="Digite aqui seu nome completo" id="nome" value="<?php echo $row_cliente->nome; ?>">
        Data de Nascimento: <input type="date" class="input-inf" name="data_nasc" id="data_nasc" value="<?php echo $row_cliente->data_nasc; ?>">
        Email: <input type="email" name="email" class="input-inf" size="50" placeholder="Digite aqui seu endereço de E-mail" id="email" value="<?php echo $row_cliente->email; ?>">
        Telefone: <input type="text" class="input-inf" name="telefone" placeholder="Ex: (45) 99999-9999" id="telefone" value="<?php echo $row_cliente->telefone; ?>">
    </div>
    <div class="inf-container">
        <div class="inf-cidade">
            Cidade:
            <select name="cidade">
                <?php

                if ($sql_cidades > 0) {
                    while ($row = $res_cidades->fetch_object()) {
                        if ($row->id == $row_cliente->id_cidade) {
                            print "<option selected value='" .  $row->id . "'>" .  $row->nome . "</option>";
                        } else {
                            print "<option value='" .  $row->id . "'>" .  $row->nome . "</option>";
                        }
                    }
                }
                ?>
            </select>
        </div>
    </div>
    <div class="inf-container">
        <div class="inf-select">
            Curso:
            <div class="">

                <?php

                if ($sql_curso > 0) {
                    while ($row_curso = $res_curso->fetch_object()) {
                        if ($row_curso->id == $row_cliente->id_curso) {
                            print "<input Checked type='checkbox' name='curso' value='" .  $row_curso->id . "'>" .  $row_curso->nome . "";
                        } else {
                            print "<input type='checkbox' name='curso' value='" .  $row_curso->id . "'>" .  $row_curso->nome . "";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="inf-container">
        Período: <br><br>
        <div class="inf-radio">
            <div class="radio-input">
                <?php

                if ($sql_periodos > 0) {
                    while ($row_periodos = $res_periodos->fetch_object()) {
                        if ($row_periodos->id == $row_cliente->id_periodo) {
                            print "<input Checked type='radio' name='periodo' class=\"radio\" value='" .  $row_periodos->id . "'>" .  $row_periodos->nome . "";
                        } else {
                            print "<input type='radio' name='periodo' class=\"radio\" value='" .  $row_periodos->id . "'>" .  $row_periodos->nome . "";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="inf-container">
        Observação:

        <textarea name="descricao" cols="60" rows="10" id="descricao"><?php echo $row_cliente->observacao; ?></textarea>
    </div>

    <div class="inf-container">
        <div class="inf-button">
            <input type="submit" name="enviar" value="gravar" class="btn-form">
        </div>
    </div>


</form>