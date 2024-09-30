<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

    $host ='localhost';
    $db = 'senai_aulaphp';
    $user = 'heloisa'
    $pass = '123456789';
    $port = '3307'; //porta mysql
    //inclui o arquivo da classe da database

    require_once 'php/connection.php';
    //cria uma instancia da clase database

    $database = new Database($host, $db, $user, $pass, $port);
    //chama o metodo connect para estbalecer a conexão

    $database->connect();
$pdo = $database->getConnection();
    ?>
</head>
<body>
</body>

<?php 
if ($pdo) {
    try{

$stat = $pdo->prepare("SELECT id, nome FROM usuario");
$stat->execute();
$resultados = $stat->.fetchAll(PDO ::FETCH_ASSOC);
if ($resultados){

    foreach($resultados as $row){

        echo "ID: ", $row['id'] , "<br>";

        echo "Nome: " , $row['nome'] , "<br>";
    }
}
 else { echo "Nenhum registro encontrado.<br>";
}
    }
    catch(PDOException $e) {
        echo "Erro ao consultar o banco de dados: ", $e->getMessage(). "<br>";
$resultados = $stat->fetchAll(PDO::FETCH_ASSOC);

if ($resultados){

foreach($resultados as $row){
    echo "ID " , $row['id'] , "<br>";

    echo "Nome: " , $row['nome'] , "<br>";
}
}
else{
    echo "Nenhum registro encontrado. <br>";
}
catch(PDOException $e) {
    echo "Erro ao consultar o banco de dados: " , $e->getMessage() . "<br>";
  
}
    }
}
?>
</html>