<h1>Listar Usuario</h1>
<?php

$sql_clientes = "SELECT clientes.*,cidades.nome AS nome_cidade, cursos.nome AS nome_curso FROM tb_clientes AS clientes INNER JOIN tb_cidades AS cidades ON clientes.id_cidade = cidades.id INNER JOIN tb_cursos AS cursos ON clientes.id_curso = cursos.id;";



$res = $conn->query($sql_clientes);

$qtd = $res->num_rows;

$tabela = "";

if ($qtd > 0) {
    $tabela .= "<table class='table table-hover table-striped table-bordered'>";
    while ($row = $res->fetch_object()) {
        $tabela .= "<tr>";
        $tabela .= "<td>" . $row->id . "</td>";
        $tabela .= "<td>" . $row->nome_cidade . "</td>";
        $tabela .= "<td>" . $row->nome_curso . "</td>";
        $tabela .= "<td>" . $row->nome . "</td>";
        $tabela .= "<td>" . $row->email . "</td>";
        $tabela .= "<td>" . $row->data_nasc . "</td>";
        

        $tabela .= "<td><button onclick=\"location.href='?page=editar&id=". $row->id ."';\" class='btn btn-success'>Editar</button>
        
        <button onclick=\"if(confirm('Tem certeza que deseja excuir?')){location.href='?page=salvar&acao=excluir&id=". $row->id ."'};\" class='btn btn-danger'>Excluir</button> </td>";
        $tabela .= "</tr>";
    }

    $tabela .= "</table>";
}

echo $tabela;
?>