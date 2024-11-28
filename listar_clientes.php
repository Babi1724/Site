<?php include('conexao.php');
$prepara=$conn->prepare('SELECT * from clientes');
$prepara->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <table border="1">
        <tr><th>ID</th><th>Nome</th><th>Telefone</th></tr>
        <?php
        while ($linha=$prepara->fetch()){
            echo '<tr><td>' . $linha['id'] .'</td>';
            echo '<td>' . $linha['nome']. '</td>';
            echo '<td>' . $linha['telefone']. '</td></tr>';
        }
        ?>
        </table>
</body>
</html>