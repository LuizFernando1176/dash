<?php
include_once '../util/conectaBD.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$user = $_POST ['user'];


$con = conectabd();

//insere User
$queryUsuario="INSERT INTO `usuario`( `nome`, `senha`, `user`) VALUES ( '$nome','$senha','$user' );";
$resultado = mysqli_query($con, $queryUsuario);
//se inseriu certo entra no IF
if($resultado ){
    
//   header('Location: ../cadastrar_Filmes.php');
    
   
}else{
    
    echo 'Deu erro verifique a query:';
    
}

?>