<?php

  class Conexao {

    private $host = 'localhost';
    private $dbname = 'php_com_pdo';
    private $user = 'root';
    private $pass = '';

    public function conectar() {

      try {
        
        $conexao = new PDO(
          "mysql:host=$this->host;dbname=$this->dbname;charset=utf8",
          "$this->user",
          "$this->pass",
        );

        return $conexao;

      } catch(PDOException $err) {
        echo '<p>' . $err->getMessage() . '</p>';
      }

    }

  };

?>