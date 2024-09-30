<?php
 $host ='localhost';
 $db = 'senai_aulaphp';
 $user = 'heloisa'
 $pass = '123456789';
 $port = '3307';

if ($pdo) {
    try {
        $stmt = $pdo->prepare("INSERT into usuario(nome, senha) values ('Valquer', '123456'); ");
    }
     catch (PDOException $e) {
        echo  "Erro ao consultar o banco de dados: ". $e->getMessage() . "<br>";
     }
}

?>