<?php
class Database{
    private $pdo;
    private $host;
    private $db;
    private $user;
    private $pass;

public function _construct($host, $db, $user, $pass, $port = 3307){
    $this->host = $host;
    $this->db = $db;
    $this->user = $user;
    $this->pass = $pass;
    $this->port = $port;
}
public function connect(){
    try {
        $this->pdo = new PDO("mysql:host_={$this->host}; port={$this->port}; dbname={$this->db}; charset=utf8", $thid->user, $this->pass);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "Conexão com o banco de dados Mysql realizada com sucesso!<br>";
    }
    catch(PDOException $e){
        echo "Erro na conexão com o banco de dados" . $e->getMessage(). "<br>";
    }
   public function getConnection(){
    return $this->pdo;
   } 
}
}
?>