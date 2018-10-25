<?php 
require_once 'classes/Categoria.php';

$nome = $_POST['nome'];

$categoria = new Categoria();
$categoria->setNome($nome);
$categoria->inserir();

header("Location: categorias.php");
die();
