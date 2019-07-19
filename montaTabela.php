<?php
include_once './util/corpo.php';
include_once './util/conectaBD.php';
$con = conectabd();

$nome = isset($_GET ['nome'])? $_GET['nome'] : "";
$ano = isset($_GET['ano'])? $_GET['ano']:"";
//insere filme
$queryIsereFilme="SELECT  `nome`, `sinopse`, `imdb`, `qualidade`, `ano`, `nome_original`, `link_fonte`, `link_imagem`, `categoria` FROM `filmes` ";
$resultados = mysqli_query($con, $queryIsereFilme);

?>