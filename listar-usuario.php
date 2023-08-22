<h1>Listar Usuario</h1>
<?php
$sql_clientes = "SELECT * FROM tb_clientes AS id_cidade 
                 INNER JOIN tb_cidades AS nome_cidade
                 ON id_cidade.tb_cidades_nome_cidade = nome_cidade.nome_cidade";

$res = $conn->query($sql_clientes);

$qtd = $res->num_rows;

if ($qtd > 0) {

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->tb_cidades_nome_cidade . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
    }
}
?>