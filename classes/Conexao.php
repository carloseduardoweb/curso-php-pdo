<?php 

class Conexao {

    public static function getInstance() {
        return new PDO('mysql:host=127.0.0.1;dbname=estoque', 'csilva', '12345678');
    }

}
