<?php
include_once '../util/conectaBD.php';

$nome = $_POST['nome'];
$sinopse = $_POST['sinopse'];
$imdb = $_POST['imdb'];
$ano = $_POST['ano'];
$qualidade = $_POST['qualidade'];
$nome_original = $_POST['nome_original'];
$categoria = utf8_decode($_POST['categoria']);
$link_fonte = $_POST['link_fonte'];
$link_imagem = $_POST['link_imagem'];


$con = conectabd();

//insere filme
$queryIsereFilme="INSERT INTO `filmes`( `nome`, `sinopse`, `imdb`, `qualidade`, `ano`, `nome_original`, `link_fonte`, `link_imagem`, `categoria`) VALUES ( '$nome' , '$sinopse','$imdb','$qualidade','$ano','$nome_original','$link_fonte','$link_imagem','$categoria' );";
$resultado = mysqli_query($con, $queryIsereFilme);
//se inseriu certo entra no IF
if($resultado ){
    
//   header('Location: ../cadastrar_Filmes.php');
   
}else{
    
    echo 'Deu erro verifique a query:';
    
}

?>