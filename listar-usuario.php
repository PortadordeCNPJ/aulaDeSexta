<h1>Listar Usuario</h1>
<?php
$sql_clientes = "SELECT * FROM tb_clientes";


$res = $conn->query($sql_clientes);
while ($row = $res->fetch_object()) {
    # code...
}
?>

