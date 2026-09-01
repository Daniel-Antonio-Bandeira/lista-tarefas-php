<?php
    //esse arquivo é onde conectamos o app ao nosso banco de dados
    class Conexao {

        private $host = 'localhost'; //nome do host name
        private $dbname = 'php_com_pdo'; //nome do banco de dados la no phpmyadmin
        private $user = 'root'; //nome do user
        private $pass = ''; // e a senha

        public function conectar() {
            try { 

                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname", //DSN, é o drive de conexão, entao usamos o mysql que é  nosso SGB, seguido do nosso host e dbname
                    "$this->user", // aqui estamos usando atributos do proprio objeto para recuperar user e senha
                    "$this->pass" 
                );

                return $conexao;

            } catch (PDOException $e) { //aqui tratamos o erro, caso ocorra ira exibir um paragrafo com a mensagem de erro captada
                echo '<p>' .$e->getMessage().'<p>';
            }
        }
    }

?>