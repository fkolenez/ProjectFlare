<?php
    class Conexao{
        public static $instance;
    
        public static function getInstance(){

            // Verifica 
            if(!isset(self::$instance)){

                // A instancia recebe essa configurações para o banco
                self::$instance = 
                new PDO("mysql:host=localhost:3306;dbname=flaredb","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                // -> acessa classes

                // excessão pra erro
                self::$instance -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$instance;
        }
    }
?>