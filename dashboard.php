<?php
        //aqui todas as vezes que a uma sessao é criada, tem que ser usuado a função session_start.
        session_start();

        //IF para testar se a sessao não for vazia, caso for retorna o usuário para a tela inicial
        if (empty($_SESSION)) {
        print "<script>location.href='index.php';</script>";
        }
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="php_icon.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Aula de Sexta</title>

    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Sistema X</a>
                <?php 
                print "Óla, " . $_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
                ?>
            </div>
        </nav>
</body>

</html>