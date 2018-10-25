<?php
require_once 'classes/Conexao.php';

class Categoria {

    private $conexao;
    private $nome;

    public function __construct() {
        $this->conexao = Conexao::getInstance();
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function listar() {
        $query = "SELECT id, nome FROM categorias";
        $resultado =  $this->conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir() {
        $query = "INSERT INTO categorias (nome) values ('$this->nome')";
        return $this->conexao->exec($query);
    }
}
